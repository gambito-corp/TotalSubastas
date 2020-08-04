<?php

namespace App\Http\Livewire\Auction\Live\Assets;

use App\Producto;
use Livewire\Component;
use App\Events\SubastaEvent;
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
            event(new SubastaEvent($this->producto));
            $this->estado();
        }
    }

    public function estado()
    {
        $this->estado = ($this->producto->user_id == Auth::id());
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
//        dd('foo');
        if($this->producto->finalized_at<=now()->subSeconds(2)){
            $this->end = ($this->producto->finalized_at <= now()->subSeconds(2));
        }
    }

    public function render()
    {
        return view('livewire.auction.live.assets.boton');
    }
}
