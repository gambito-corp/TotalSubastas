<?php

namespace App\Http\Livewire\Subastas\Live;

use App\Helpers\Gambito;
use App\Message;
use App\Producto;
use App\Vehicle;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{

    /**
     * @var mixed|string
     */
    public $identificador;
    /**
     * @var mixed
     */
    public $producto;
    /**
     * @var mixed
     */
    public $vehiculo;
    /**
     * @var mixed
     */
    public $mensajes;
    /**
     * @var mixed
     */
    public $resultado;
    /**
     * @var mixed
     */
    public $ranking;
    /**
     * @var mixed
     */
    public $pujar;
    /**
     * @var int|mixed
     */
    public $timer;
    /**
     * @var mixed
     */
    public $estado;
    /**
     * @var false|int|mixed
     */
    public $finaliza;
    /**
     * @var false|int|mixed
     */
    public $countDown;


    public function mount()
    {
        $this->identificador = Gambito::hash(request()->route()->parameter('id'), true);
        $this->producto = Gambito::obtenerProducto($this->identificador);
        $this->vehiculo = Gambito::obtenerVehiculo($this->identificador);
        $this->mensajes = Gambito::obtenerMensajes($this->identificador);
        $this->resultado = Gambito::obtenerMensajes($this->identificador, true);
//        dd($this->resultado);
        $this->pujar = $this->producto->precio + $this->producto->puja;
        $this->estado = Gambito::checkEstado($this->producto, $this->identificador, true);
        $this->timer = Gambito::cuentaRegresiva();
    }

    public function hydrate()
    {
        $this->mensajes = Gambito::obtenerMensajes($this->identificador);
        $this->resultado = Gambito::obtenerMensajes($this->identificador, true);
        $this->estado = Gambito::checkEstado($this->producto, $this->identificador, true);
    }

    public function pujar()
    {
        Gambito::Pujar($this->identificador,true);
        $this->emitSelf('refresh');
    }

    public function refresh()
    {
        $this->hydrate();
    }

    public function render()
    {
        return view('livewire.subastas.live.index');
    }
}
