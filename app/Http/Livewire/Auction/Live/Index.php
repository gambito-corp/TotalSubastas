<?php

namespace App\Http\Livewire\Auction\Live;

use App\Events\ContadorEvent;
use App\Events\DatosEvent;
use App\Events\MensajeEvent;
use App\Events\RankingEvent;
use App\Events\SubastaEvent;
use App\Helpers\Gambito;
use App\ImagenesVehiculo;
use App\Message;
use App\Producto;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public $producto;
    public $estado;
    public $identificador;
    public $imagen;
    public $vehiculo;
    public $hace;
    public $mensajes;
    public $end;
    public $mensaje;
    public $pictures;


    public function mount()
    {
        $this->identificador = Gambito::hash(request()->route()->parameter('id'), true);
        $this->producto = Gambito::obtenerProducto($this->identificador);
        $this->imagen = $this->producto->imagen;
        $this->vehiculo = Gambito::obtenerVehiculo($this->identificador);
        $this->producto->user_id == Auth::id()? $this->estado=true:$this->estado=false;
        $this->hace = $this->producto->started_at->diffForHumans();
        $this->mensajes = Message::where('producto_id', $this->identificador)->get();
        $this->estado = Gambito::checkEstado($this->producto, Auth::id(), true);
        $this->pictures = ImagenesVehiculo::where('producto_id', $this->producto->id)->get();
    }

    protected function getListeners()
    {
        return [
            "echo-private:subasta.{$this->identificador},SubastaEvent" => 'estado',
        ];
    }

    public function pujar()
    {
        $event = event(new RankingEvent($this->producto));
        dd($event);
        if(now()->toTimeString() <= $this->producto->finalized_at->toTimeString() || $this->producto->user_id != Auth::id()){
            $this->estado = Gambito::checkEstado($this->producto, Auth::id(), true);
            $mensaje = intval($this->producto->precio + $this->producto->puja);
            $usuario = Auth::id();
            event(new SubastaEvent($this->producto));
            event(new ContadorEvent($this->producto));
            event(new DatosEvent($this->producto, $usuario));
            event(new MensajeEvent($this->producto, $mensaje));
            event(new RankingEvent($this->producto));
        }else{
            $this->mensaje = 'Ya no mas';
        }
        $this->estado();
    }

    public function estado()
    {
        $this->estado = Gambito::checkEstado($this->producto, Auth::id(), true);
    }

    public function online()
    {
        //
        //
    }


    public function render()
    {

        return view('livewire.auction.live.index');
    }
}
