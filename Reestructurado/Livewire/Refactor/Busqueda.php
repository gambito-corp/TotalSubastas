<?php

namespace App\Http\Livewire\Refactor;

use App\Company;
use App\Lot;
use App\Producto;
use Livewire\Component;

class Busqueda extends Component
{
    public $buscar;
    public $usuarios;
    public $empresas;
    public $picked;
    public $resultado;

    public function mount()
    {
        $this->buscar = "";
        $this->picked = true;
        $this->usuarios = [];
        $this->empresas = Company::all();
//        dd($this->empresas);
        $this->resultado = [];
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

        foreach($this->empresas as $empresa)
        {
            foreach($empresa->Lote as $lote)
                foreach ($lote->Producto as $producto){}
//                dump($producto->Lotes->Empresas);
        }



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
        return view('livewire.refactor.busqueda');
    }
}
