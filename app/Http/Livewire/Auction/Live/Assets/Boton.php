<?php

namespace App\Http\Livewire\Auction\Live\Assets;


use App\Events\ejemplo;
use App\Events\Game\RemainingTimeChanged;
use App\Producto;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

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

    public function listeners ()
    {
        return [
            'echo:canal-ejemplo,ejemplo' => '$refresh',
            'estado' => 'foo'
        ];
    }

    public function mount(Producto $producto, $estado)
    {
        $this->producto = $producto;
        $this->estado = $estado;
    }


    public function pujar()
    {
        event(new ejemplo($this->producto));
        $this->estado = ($this->producto->user_id == Auth::id());
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
        $this->estado = ($this->producto->user_id == Auth::id());
    }
    public function foo()
    {
        dd('foo');
        if($this->producto->finalized_at<=now()->subSeconds(2)){
            $this->end = ($this->producto->finalized_at <= now()->subSeconds(2));
        }
    }

    public function render()
    {
        return view('livewire.auction.live.assets.boton');
    }
}
