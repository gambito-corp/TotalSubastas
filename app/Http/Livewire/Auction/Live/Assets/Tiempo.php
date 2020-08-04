<?php

namespace App\Http\Livewire\Auction\Live\Assets;

use App\Events\Game\RemainingTimeChanged;
use App\Events\Game\WinnerNumberGenerated;
use App\Helpers\Gambito;
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

    public $identificador;




    public function mount(Producto $producto, $identificador)
    {
        $this->identificador = $identificador;
        $this->producto = $producto->load('Usuario');
        $this->ganador = $producto->Usuario->name;
    }

    protected function getListeners()
    {
        return [
            "echo-private:datos.{$this->identificador},DatosEvent" => 'noop',
        ];
    }

    public function noop()
    {
        if($this->producto->finalized_at->sub(20, 'Seconds') <= now())
        {
            $this->time = 20;
        }
    }

    public function foo()
    {
        if($this->producto->finalized_at<=now()->subSeconds(3)){
//            dd($this->producto->id);
            return redirect()->route('endAuc', ['id' => $this->producto->id]);
        }
        $this->emit('estado');
    }
    public function render()
    {
        return view('livewire.auction.live.assets.tiempo');
    }
}
