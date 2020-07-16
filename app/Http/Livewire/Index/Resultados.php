<?php

namespace App\Http\Livewire\Index;

use App\Lot;
use App\Company;
use App\Vehicle;
use App\Producto;
use Livewire\Component;

class Resultados extends Component
{
    public $usuarios;
    public $resultado;
    public $url;
    public $buscar;
    public $empresas;
    public $picked;

    protected $listeners = ['buscarEmpresas', 'selecionEmpresa'];
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

    public function mount($empresas)
    {
        $this->usuarios = [];
        $this->resultado = [];
        $this->buscar = "";
        $this->picked = true;
        $this->empresas = $empresas;
    }

    public function buscarEmpresas($buscar = [], $Min = 0, $Max = 0)
    {
        $this->precioMin = $Min;
        $this->precioMax = $Max;
//        dd($this->precioMin, $this->precioMax);

        if(empty($buscar)){
            $this->empresas = Company::with('Productos')->whereHas('Productos', function($query){
                $query->whereBetween('precio', [$this->precioMin, $this->precioMax]);
            })->get();
        }else{
            $this->buscar = $buscar[0];
            $this->picked = false;
            $this->empresas = Company::where("nombre", "like", "%".trim($this->buscar['nombre']) . "%")
                ->take(3)
                ->get();
        }
    }
    public function selecionEmpresa($buscar)
    {
        $this->buscar = $buscar;
        $this->picked = false;
        $this->empresas = Company::where("nombre", "like", "%".trim($this->buscar) . "%")
            ->get();
    }


    public function render()
    {
        return view('livewire.index.resultados');
    }
}
