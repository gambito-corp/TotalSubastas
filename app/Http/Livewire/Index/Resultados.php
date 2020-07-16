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

    public function mount($empresas)
    {
        $this->usuarios = [];
        $this->resultado = [];
        $this->buscar = "";
        $this->picked = true;
        $this->empresas = $empresas;
    }

    public function buscarEmpresas($buscar)
    {
//        dd($buscar);
        $this->buscar = $buscar[0];
//        dd($this->buscar['nombre']);
        $this->picked = false;
        $this->empresas = Company::where("nombre", "like", "%".trim($this->buscar['nombre']) . "%")
            ->take(3)
            ->get();
//        dd($this->empresas);
    }
    public function selecionEmpresa($buscar)
    {
        dd($buscar);
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

//$this->emit('buscarEmpresas', $this->buscar);
