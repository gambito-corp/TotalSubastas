<?php

namespace App\Http\Livewire\Auction\Live\Assets;

use App\Producto;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class StatusWin extends Component
{
    /**
     * @var mixed
     */
    public $producto;

    protected $listeners = ['echo:canal-ejemplo,ejemplo' => 'noop'];

    public function mount(Producto $producto)
    {
        $this->producto = $producto->load('Usuario');
    }

    public function noop()
    {
        $this->producto->precio;
    }

    public function render()
    {
        return view('livewire.auction.live.assets.status-win');
    }
}
