<?php

namespace App\Http\Livewire\Auction\Live\Assets;

use App\Producto;
use Livewire\Component;

class Tiempo extends Component
{
    /**
     * @var mixed
     */
    public $producto;

    /**
     * @var mixed
     */
    public $ganador;


    protected $listeners = ['echo:canal-ejemplo,ejemplo' => 'noop'];

    public function mount(Producto $producto)
    {
        $this->producto = $producto->load('Usuario');
        $this->ganador = $producto->Usuario->name;
    }

    public function noop()
    {
        //
    }
    public function render()
    {
        return view('livewire.auction.live.assets.tiempo');
    }
}
