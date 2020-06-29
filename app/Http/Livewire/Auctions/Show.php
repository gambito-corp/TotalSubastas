<?php

namespace App\Http\Livewire\Auctions;

use App\Producto;
use App\User;
use App\Vehicle;
use App\VehicleDetail;
use Composer\DependencyResolver\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Hashids\Hashids;

class Show extends Component
{
    public $Producto;
    public $Vehiculo;
    public $Detalle;
    public $hola = 'hola';
    public $Estado;

    public function mount($id)
    {
        $this->Producto = new Producto();
        $hashids = new Hashids();
        $id = $hashids->decode($id);
        $this->Producto->id = $id[0];
        $this->Producto = Producto::where('id', $this->Producto->id)->first();
        $this->Vehiculo = Vehicle::where('lote_id', $this->Producto->id)->first();
        $this->Detalle = VehicleDetail::where('Vehiculo_id', $this->Vehiculo->id)->first();
        //comprobar si existe el usuario actual

        if(!is_null(Auth::user())){
            $user = Auth::user();
        }else{
            $user = new User();
            $user->id = 0;
        }

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
        return view('livewire.auctions.show');
    }
}
