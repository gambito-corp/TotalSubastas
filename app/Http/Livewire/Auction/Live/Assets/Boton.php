<?php

namespace App\Http\Livewire\Auction\Live\Assets;


use App\Events\ejemplo;
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

    public function listeners ()
    {
        return ['echo:canal-ejemplo,ejemplo' => '$refresh'];
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
        $this->estado = ($this->producto->user_id == Auth::id());
    }

    public function render()
    {
        return view('livewire.auction.live.assets.boton');
    }
}
