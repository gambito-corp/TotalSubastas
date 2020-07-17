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

    public function mount($empresas)
    {
        $this->usuarios = [];
        $this->resultado = [];
        $this->buscar = "";
        $this->picked = true;
        $this->empresas = $empresas->load('Productos');
        $this->precioMax = 1000000;
        $this->precioMin = 1;
    }

    public function buscarEmpresas($buscar = [])
    {
        $this->buscar = $buscar[0];
        $this->picked = false;
        $this->empresas = Company::where("nombre", "like", "%".trim($this->buscar['nombre']) . "%")
            ->get();
    }

    public function selecionEmpresa($buscar)
    {
        $this->buscar = $buscar;
        $this->picked = false;
        $this->empresas = Company::where("nombre", "like", "%".trim($this->buscar) . "%")
            ->get();
    }

    public function Precio($min = 0, $max = 0)
    {
        $this->precioMin = intval($min);
        $this->precioMax = intval($max);

        if ($this->precioMax == 0){
            $this->precioMax = 1000000;
        }elseif ($this->precioMin > $this->precioMax){
            $this->precioMax = $this->precioMin+1;
        }elseif($this->precioMin = 0) {
            $this->precioMin = 1;
        }
        $this->empresas = Company::all();
    }


    public function render()
    {
        return view('livewire.index.resultados');
    }
}
