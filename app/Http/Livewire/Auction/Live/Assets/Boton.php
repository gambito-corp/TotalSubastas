<?php

namespace App\Http\Livewire\Auction\Live\Assets;

use App\Events\MensajeEvent;
use App\Events\RankingEvent;
use App\Producto;
use Livewire\Component;
use App\Events\DatosEvent;
use App\Events\SubastaEvent;
use App\Events\ContadorEvent;
use Illuminate\Support\Facades\Auth;

class Boton extends Component
{
    /**
     * @var mixed
     */
    public $producto;

    /**
     * @var bool|mixed
     */
    public $estado;

    protected $listeners = ['estado'];
    /**
     * @var int|mixed
     */
    public $time;
    /**
     * @var mixed
     */
    public $end;

    public $identificador;

    public function mount(Producto $producto, $estado, $identificador)
    {
        $this->identificador = $identificador;
        $this->producto = $producto;
        $this->estado = $estado;
    }

    public function getListeners ()
    {
        return [
            "echo-private:subasta.{$this->identificador},SubastaEvent" => 'foo',
        ];
    }


    public function pujar()
    {
        if($this->producto->user_id != Auth::id()){
            $mensaje = intval($this->producto->precio + $this->producto->puja);
            $usuario = Auth::id();
            event(new SubastaEvent($this->producto));
            event(new ContadorEvent($this->producto));
            event(new DatosEvent($this->producto, $usuario));
            event(new MensajeEvent($this->producto, $mensaje));
            event(new RankingEvent($this->producto));
        }
        $this->estado();
    }

    public function estado()
    {

        $bool = false;
        if($this->producto->finalized_at <= now()->subSeconds(2))
        {
            $bool = true;
        }else{
            $bool = false;
        }
        $this->end = $bool;
    }
    public function foo()
    {
        $this->estado = ($this->producto->user_id == Auth::id());
        if($this->producto->finalized_at<=now()->subSeconds(2)){
            $this->end = ($this->producto->finalized_at <= now()->subSeconds(2));
        }
    }

    public function render()
    {
        return view('livewire.auction.live.assets.boton');
    }
}
