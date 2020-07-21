<?php

namespace App\Http\Livewire\Index;

use App\Company;
use App\Producto;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Busqueda extends Component
{
    public $buscar = '';
    public $empresas = [];
    public $picked;
    public $precioMin;
    public $precioMax;
    public $memoria;
    /**
     * @var mixed
     */
    public $ciudad;
    /**
     * @var mixed
     */
    public $tipoV;
    /**
     * @var mixed
     */
    public $tipoR;
    /**
     * @var Producto[]|\Illuminate\Database\Eloquent\Collection|mixed
     */
    public $select;


    public function mount($empresas)
    {
        $this->memoria = 3000;
        $this->picked = true;
        $this->empresas = $empresas;
        $this->precioMax = 1000000;
        $this->select = Producto::all();
    }

    public function updatedBuscar()
    {
        if($this->buscar != ''){
            Cache::put('buscar', $this->buscar, $this->memoria);
        }
        if(Cache::has('buscar')) {
            $this->buscar == Cache::get('buscar');
        }
        $this->General();
    }

    public function updatedPrecioMin()
    {
        if($this->precioMin != 0){
            Cache::put('Min', intval($this->precioMin), $this->memoria);
        }
        if(Cache::has('Min')) {
            $this->precioMin == Cache::get('Min');
        }
        $this->General();
    }

    public function updatedPrecioMax()
    {
        if($this->precioMax != 1 || $this->precioMax != 1000000 ){
            Cache::put('Max', intval($this->precioMax), $this->memoria);
        }elseif($this->precioMax == 0 ){
            Cache::put('Max', 1000000, $this->memoria);
        }
        if(Cache::has('Max')) {
            $this->precioMax == Cache::get('Max');
        }
        $this->General();
    }

    public function updatedCiudad()
    {
        if($this->ciudad != ''){
            Cache::put('ciudad', $this->ciudad, $this->memoria);
        }
        if(Cache::has('ciudad')) {
            $this->ciudad == Cache::get('ciudad');
        }
        $this->General();
    }

    protected function General()
    {
        $this->picked = false;
        $Max = Cache::get('Max');
        $Min = Cache::get('Min');
        $buscar = trim($this->buscar);
        $this->empresas = Company::with(['Productos' => function ($query){
            $query->whereBetween("precio", [$this->precioMin, $this->precioMax])
                ->when(!empty($this->ciudad), function ($query){
                    $query->where("ciudad", $this->ciudad);
                });
        }, 'Productos.Lote'])
            ->get();
        $this->emit('buscarEmpresas', $this->empresas);
    }

    public function asignarEmpresa($nombre)
    {
        $this->buscar = $nombre;
        $this->picked = true;
    }

    public function asignarPrimero()
    {
        $empresas = Company::where("nombre", "like", "%".trim($this->buscar) . "%")->first();
        if($empresas)
        {
            $this->buscar = $empresas->nombre;
        }
        else
        {
            $this->buscar = "...";
        }
        $this->picked = true;
    }

    public function render()
    {
        return view('livewire.index.busqueda');
    }
}
