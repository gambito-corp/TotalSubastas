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



    public $Producto;
    public $Vehiculo;
    public $Detalle;
    public $hola = 'hola';
    public $Estado;

    public function mount()
    {
        $id = Gambito::hash(request()->route()->parameter('id'), true);
        $this->Producto = Producto::where('id', $id)->first();
        $this->Vehiculo = Vehicle::where('producto_id', $id)->first();
        $this->Detalle = VehicleDetail::where('Vehiculo_id', $this->Vehiculo->id)->first();

        $user = Gambito::checkUser();

        //TODO: Pasar a metodo en gambito checkEstado()
        if($this->Producto->started_at->sub(15, 'Minutes')<=now() && $this->Producto->finalized_at >= now()){
            $this->Estado[0] = 'online';
        }elseif($this->Producto->user_id == $user->id && $this->Producto->finalized_at >= now()){
            $this->Estado[0] = 'ganador';
        }elseif($this->Producto->user_id != $user->id && $this->Producto->finalized_at >= now()){
            $this->Estado[0] = 'puja';
        }elseif($this->Producto->finalized_at <= now()){
            $this->Estado[0] = 'Finalizada';
        }else{
            $this->Estado[0] = 'puja';
        }
    }

    public function render()
    {
        return view('livewire.subastas.show.index');
    }
}
