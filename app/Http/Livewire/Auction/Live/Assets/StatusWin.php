<?php

namespace App\Http\Livewire\Auction\Live\Assets;

use App\Helpers\Gambito;
use App\Producto;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class StatusWin extends Component
{
    /**
     * @var mixed
     */
    public $producto;

    public $identificador;



    public function mount(Producto $producto, $identificador)
    {
        $this->identificador = $identificador;
        $this->producto = $producto->load('Usuario');
    }

    protected function getListeners()
    {
        return [
            "echo-private:subasta.{$this->identificador},SubastaEvent" => 'noop',
        ];
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
