<?php

namespace App\Http\Livewire\Auctions\Assets\Live;

use App\Producto;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BotonPuja extends Component
{
    public $pujar;
    public $producto;

    public function mount($pujar, $producto)
    {
        $this->pujar = $pujar;
        $this->producto = $producto;
    }



    public function Pujar($pujar)
    {
        dd($pujar, $this->producto);
        $producto = Producto::where('id', 1)->first();
        $producto->user_id = Auth::user()->id;
        $producto->precio = $pujar;
        $producto->update();
        $mensaje = [
            'usuario' => Auth::user()->name,
            'id' => Auth::user()->id,
            'puja' => $pujar
        ];
        $this->emit('Pujar', $mensaje);
    }
    public function render()
    {
        return view('livewire.auctions.assets.live.boton-puja');
    }
}
