<?php

namespace App\Http\Livewire\Auction\Live\Assets;

use App\Events\MensajeEvent;
use App\Events\RankingEvent;
use App\Helpers\Gambito;
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

    public function mount(Producto $producto, $estado, $identificador, $end)
    {
        $this->identificador = $identificador;
        $this->producto = $producto;
        $this->estado = Gambito::checkEstado($this->producto, Auth::id(), true);
        $this->end = $end;
        $this->time = $this->producto->finalized_at->toTimeString();
    }

    public function getListeners ()
    {
        return [
            "echo-private:subasta.{$this->identificador},SubastaEvent" => 'foo',
        ];
    }


    public function estado()
    {
        $this->estado = Gambito::checkEstado($this->producto, Auth::id(), true);
//        $bool = false;
//        if($this->producto->finalized_at <= now()->subSeconds(2))
//        {
//            $bool = true;
//        }else{
//            $bool = false;
//        }
//        $this->end = $bool;
    }
    public function foo()
    {
        $this->estado = ($this->producto->user_id == Auth::id());
//        if($this->producto->finalized_at<=now()->subSeconds(2)){
//            $this->end = ($this->producto->finalized_at <= now()->subSeconds(2));
//        }
        $this->hydrate();
    }

    public function hydrate()
    {
        if($this->producto->finalized_at >= now()->subSeconds(300)){
            $this->end = 'true x';
        }else{
            $this->end = 'false y';
        }
    }

    public function render()
    {
        return view('livewire.auction.live.assets.boton');
    }
}
