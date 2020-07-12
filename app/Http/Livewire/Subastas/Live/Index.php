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

    protected $listeners = ['refresh'];


    public function mount()
    {
        $this->identificador = Gambito::hash(request()->route()->parameter('id'), true);
        $this->producto = Gambito::obtenerProducto($this->identificador);
        $this->vehiculo = Gambito::obtenerVehiculo($this->identificador);
        $this->mensajes = Gambito::obtenerMensajes($this->identificador);
        $this->resultado = Gambito::obtenerMensajes($this->identificador, true);
        $this->pujar = $this->producto->precio + $this->producto->puja;
        $this->estado = Gambito::checkEstado($this->producto, Auth::id(), true);
        $this->timer = Gambito::cuentaRegresiva($this->identificador);



    }

    public function hydrate()
    {
        $this->pujar = $this->producto->precio + $this->producto->puja;
        $this->mensajes = Gambito::obtenerMensajes($this->identificador);
        $this->resultado = Gambito::obtenerMensajes($this->identificador, true);
        $this->timer = Gambito::cuentaRegresiva($this->identificador);
        $this->estado = Gambito::checkEstado($this->producto, Auth::id(), true);

        if($this->producto->finalized_at->toDateTimeString() <= now()->toDateTimeString())
        {
            $holi = 'holi';
            $this->redirect(route('endAuc', ['id' => Gambito::hash($this->identificador)]));
        }
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
