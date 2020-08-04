<?php

namespace App\Http\Livewire\Auction\Live;

use App\Helpers\Gambito;
use App\Message;
use App\Producto;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    /**
     * @var mixed
     */
    public $producto;
    /**
     * @var bool|mixed
     */
    public $estado;
    /**
     * @var mixed|string
     */
    public $identificador;
    /**
     * @var mixed
     */
    public $imagen;
    /**
     * @var bool|mixed
     */
    public $vehiculo;
    /**
     * @var mixed
     */
    public $hace;
    /**
     * @var \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|mixed
     */
    public $mensajes;


    public function mount()
    {
        $this->identificador = Gambito::hash(request()->route()->parameter('id'), true);
        $this->producto = Gambito::obtenerProducto($this->identificador);
        $this->imagen = $this->producto->imagen;
        $this->vehiculo = Gambito::obtenerVehiculo($this->identificador);
        $this->producto->user_id == Auth::id()? $this->estado=true:$this->estado=false;
        $this->hace = $this->producto->started_at->diffForHumans();
        $this->mensajes = Message::where('producto_id', $this->identificador)->get();
        $this->estado = ($this->producto->user_id == Auth::id());
    }

    protected function getListeners()
    {
        return [
            "echo-private:subasta.{$this->identificador},SubastaEvent" => 'noop',
        ];
    }

    public function noop()
    {
        //
    }


    public function render()
    {
        return view('livewire.auction.live.index');
    }
}
