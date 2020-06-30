<?php

namespace App\Http\Livewire\Index;

use App\Company;
use Livewire\Component;

class Busqueda extends Component
{
    public $buscar = '';
    public $empresas = [];
    public $picked;

    public function mount()
    {
        $this->buscar = "";
        $this->picked = true;
        $this->empresas = Company::all();
    }

    public function updatedBuscar()
    {
        $buscar = $this->buscar;
        $this->picked = false;
        $this->validate([
            "buscar" => "required|min:2"
        ]);
        $this->empresas = Company::where("nombre", "like", "%".trim($this->buscar) . "%")
            ->take(3)
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
