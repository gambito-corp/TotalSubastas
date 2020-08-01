<?php

namespace App\Http\Livewire\Auction\Live\Assets;

use App\Events\Game\RemainingTimeChanged;
use App\Events\Game\WinnerNumberGenerated;
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

    public $time;


    protected $listeners = ['echo:canal-ejemplo,ejemplo' => 'noop'];

    public function mount(Producto $producto)
    {
        $this->producto = $producto->load('Usuario');
        $this->ganador = $producto->Usuario->name;
    }

    public function noop()
    {
        if($this->producto->finalized_at->sub(20, 'Seconds') <= now())
        {
            $this->time = 20;
        }
    }

    public function foo(){
        dd('holamundo');
    }
    public function render()
    {
        return view('livewire.auction.live.assets.tiempo');
    }
}
