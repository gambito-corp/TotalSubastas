<?php

namespace App\Http\Livewire\Subastas\Show;

use App\Helpers\Gambito;
use App\Producto;
use App\User;
use App\Vehicle;
use App\VehicleDetail;
use Composer\DependencyResolver\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Hashids\Hashids;

class Index extends Component
{
    public $producto;
    public $vehiculo;
    public $detalle;
    public $estado;

    public function mount()
    {
        $id = Gambito::hash(request()->route()->parameter('id'), true);
        $this->producto = Producto::where('id', $id)->with('Usuario')->first();
        $this->vehiculo = Vehicle::where('producto_id', $id)->first();
        $this->detalle = VehicleDetail::where('Vehiculo_id', $this->vehiculo->id)->first();
        $user = Gambito::checkUser();
        $this->estado = Gambito::checkEstado($this->producto, $user->id);
    }

    public function render()
    {
        return view('livewire.subastas.show.index');
    }
}
