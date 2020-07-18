<?php

namespace App\Http\Livewire\Subastas\Show;

use App\Helpers\Gambito;
use App\VehicleDetail;
use Livewire\Component;

class Index extends Component
{
    public $producto;
    public $vehiculo;
    public $detalle;
    public $estado;

    public function mount()
    {
        $id = Gambito::hash(request()->route()->parameter('id'), true);
        $this->producto = Gambito::obtenerProducto($id);
        $this->vehiculo = Gambito::obtenerVehiculo();
        $this->detalle = VehicleDetail::where('Vehiculo_id', Gambito::obtenerVehiculo()->id)->first();
        $user = Gambito::checkUser();
        $this->estado = Gambito::checkEstado($this->producto, $user->id);
    }

    public function render()
    {
        return view('livewire.subastas.show.index');
    }
}
