<?php

namespace App\Http\Livewire\Index;

use App\Company;
use Livewire\Component;

class Busqueda extends Component
{
    public $buscar = '';
    public $empresas = [];
    public $picked;
    public $precioMin;
    public $precioMax;

    public function mount()
    {
        $this->buscar = "";
        $this->picked = true;
        $this->empresas = Company::all();
        $this->precioMin = 0;
        $this->precioMax = 0;



    }

    public function updatedBuscar()
    {
        $this->picked = false;
        $this->validate([
            "buscar" => "required|min:2"
        ]);
        $this->empresas = Company::where("nombre", "like", "%".trim($this->buscar) . "%")
            ->orWhere("razon_social", "like", "%".trim($this->buscar) . "%")
            ->take(3)
            ->get();
        $this->emit('buscarEmpresas', $this->empresas);
    }

    public function updatedPrecioMin()
    {
        $this->empresas = Company::with('Productos')->whereHas('Productos', function($query){
            $query->whereBetween('precio', [$this->precioMin, $this->precioMax]);
        })->get();
        $this->emit('buscarEmpresas', $this->empresas, $this->precioMin, $this->precioMax);
    }

    public function updatedPrecioMax()
    {
        $this->empresas = Company::with('Productos')->whereHas('Productos', function($query){
            $query->whereBetween('precio', [$this->precioMin, $this->precioMax]);
        })->get();
        $this->emit('buscarEmpresas', $this->empresas, $this->precioMin, $this->precioMax);
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
