<?php

namespace App\Http\Livewire\Index;

use App\Company;
use Illuminate\Http\Request;
use Livewire\Component;

class Busqueda extends Component
{
    public $currentUrl;
    public $buscar = '';
    public $empresas = [];
    public $picked;
    public $precioMin;
    public $precioMax;

    public function mount(Request $request)
    {
        $this->currentUrl = $request->url();
        $this->buscar = "";
        $this->picked = true;
        $this->empresas = Company::all()->load('Productos', 'Lotes');
        $this->precioMin = 0;
        $this->precioMax = 0;
    }

    public function updatedBuscar()
    {
        $this->picked = false;
        $this->validate([
            "buscar" => "string"
        ]);
        $this->empresas = Company::where("nombre", "like", "%".trim($this->buscar) . "%")
            ->orWhere("razon_social", "like", "%".trim($this->buscar) . "%")
            ->with('Productos', 'Lotes')
            ->get();
        $this->emit('buscarEmpresas', $this->empresas);
    }

    public function updatedPrecioMin()
    {
        $this->validate([
            "precioMin" => "integer"
        ]);
        $this->emit('Precio', $this->precioMin, $this->precioMax);
    }

    public function updatedPrecioMax()
    {
        $this->validate([
            "precioMax" => "integer"
        ]);
        $this->emit('Precio', [], $this->precioMin, $this->precioMax);
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
