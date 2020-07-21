<?php

namespace App\Http\Livewire\Index;

use App\Lot;
use App\Company;
use App\Producto;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Resultados extends Component
{
    public $usuarios;
    public $resultado;
    public $buscar;
    public $empresas;
    public $picked;

    protected $listeners = ['buscarEmpresas', 'selecionEmpresa', 'Precio'];
    /**
     * @var Lot[]|\Illuminate\Database\Eloquent\Collection|mixed
     */
    public $lotes;
    /**
     * @var \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|mixed
     */
    public $productos;
    /**
     * @var mixed
     */
    public $vehiculos;
    /**
     * @var mixed
     */
    public $precioMin;
    /**
     * @var mixed
     */
    public $precioMax;
    /**
     * @var bool|mixed
     */
    public $mount;
    /**
     * @var mixed
     */
    public $ciudad;


    public function mount($empresas)
    {
        $this->usuarios = [];
        $this->resultado = [];
        $this->picked = true;
        $this->empresas = $empresas;
        $this->mount = 1;
        $this->precioMin = 0;
        $this->precioMax = 1000000;
    }

    public function buscarEmpresas()
    {
        if(Cache::has('buscar')) {
            $this->buscar = Cache::get('buscar');
        }
        if(Cache::has('Min')) {
            $this->precioMin = Cache::get('Min');
        }
        if(Cache::has('Max')) {
            $this->precioMax = Cache::get('Max');
        }
        if(Cache::has('ciudad')) {
            $this->ciudad = Cache::get('ciudad');
        }
//        dd($this->ciudad, 'resultados para ciudad', Cache::get('ciudad'));
        $this->picked = false;

        $this->empresas = Company::with(['Productos' => function ($query){
            $query->whereBetween("precio", [$this->precioMin, $this->precioMax])
                ->when(!empty($this->ciudad), function ($query){
                    $query->where("ciudad", $this->ciudad);
                });
        }, 'Productos.Lote'])
            ->get();
//        dd($this->empresas);

//        $empresas->whereDoesntHave('Productos', function ($query){
//            $query->where("precio", "<", $this->precioMin);
//        })->get();
//        $this->empresas = Company::where("nombre", "like", "%".trim($this->buscar) . "%")
//            ->get();
//        $this->empresas = DB::select('Select * from companies,lots,productos where companies.id = lots.empresa_id and lots.id = productos.lote_id and productos.precio >= 1000 and productos.precio <= 2000');
//        $this->empresas = DB::select("Select * from companies as emp join lots as lot on lot.empresa_id=emp.id join productos as prod on prod.lote_id = lot.id where prod.precio between $this->precioMin and $this->precioMax");
//        dd(collect($this->empresas));
    }

    public function selecionEmpresa($buscar)
    {
        $this->buscar = $buscar;
        $this->picked = false;
        $this->empresas = Company::where("nombre", "like", "%".trim($this->buscar) . "%")
            ->get();
    }

//    public function Precio($min = 0, $max = 0)
//    {
//        $this->precioMin = intval($min);
//        $this->precioMax = intval($max);
//
//        if ($this->precioMax == 0){
//            $this->precioMax = 1000000;
//        }elseif ($this->precioMin > $this->precioMax){
//            $this->precioMax = $this->precioMin+1;
//        }elseif($this->precioMin = 0) {
//            $this->precioMin = 1;
//        }
//        $this->empresas = Company::all();
//    }


    public function render()
    {
        return view('livewire.index.resultados');
    }
}
