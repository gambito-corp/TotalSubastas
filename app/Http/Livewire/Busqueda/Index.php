<?php

namespace App\Http\Livewire\Busqueda;

use App\Company;
use Livewire\Component;

class Index extends Component
{
    public $buscar;
    public $empresas;
    public $picked;

    public function mount()
    {
        $this->buscar = '';
        $this->empresas = [];
        $this->picked = true;
    }

    public function updatedBuscar()
    {
        $this->picked = false;
        $this->validate([
            "buscar" => "required|min:2"
        ]);

        $this->empresas = Company::where("nombre", "like", "%".trim($this->buscar) . "%")
            ->take(3)
            ->get();
        dd($this->empresas);

    }

    public function asignarEmpresa($empresa)
    {
        $this->buscar = $empresa;
        $this->picked = true;
    }

    public function asignarPrimero()
    {
        $empresa = Company::where("nombre", "like", "%".trim($this->buscar) . "%")->first();
        if($empresa)
        {
            $this->buscar = $empresa->nombre;
        }
        else
        {
            $this->empresas = "...";
        }
        $this->picked = true;
    }

    public function render()
    {
        return view('livewire.busqueda.index');
    }
}
