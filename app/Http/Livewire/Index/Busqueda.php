<?php

namespace App\Http\Livewire\Index;

use App\Company;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Busqueda extends Component
{
    public $buscar = '';
    public $empresas = [];
    public $picked;
    public $precioMin;
    public $precioMax;
    public $memoria;



    public function mount()
    {
        $this->memoria = 3000;
        $this->picked = true;
        $this->empresas = Company::all()->load('Productos', 'Lotes');
        $this->precioMax = 1000000;
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
        if($this->precioMax != 0 || $this->precioMax != 1000000 ){
            Cache::put('Max', intval($this->precioMax), $this->memoria);
        }
        if(Cache::has('Max')) {
            $this->precioMax == Cache::get('Max');
        }
        $this->General();
    }

    protected function General()
    {
        $this->picked = false;
        $this->empresas = Company::where("nombre", "like", "%".trim($this->buscar) . "%")
            ->orWhere("razon_social", "like", "%".trim($this->buscar) . "%")
            ->with('Productos', 'Lotes')
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
