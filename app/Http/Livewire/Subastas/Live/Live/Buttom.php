<?php

namespace App\Http\Livewire\Subastas\Live\Live;

use App\Producto;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Buttom extends Component
{
    public $pujar;
    public $producto;

    public function mount($pujar, $producto)
    {
        $this->pujar = $pujar;
        $this->producto = $producto;
    }

    public function refescar()
    {
        //
    }



    public function Pujar($pujar)
    {
        $producto = Producto::where('id', $this->producto)->first();
        dd($pujar, $producto);
        $producto->user_id = Auth::user()->id;
        $producto->precio = $pujar;
        $producto->update();
        $mensaje = [
            'usuario' => Auth::user()->name,
            'id' => Auth::user()->id,
            'puja' => $pujar
        ];
        $this->pujar = $pujar;
        $this->refescar();
        $this->emit('Pujar', $mensaje);
    }

    public function render()
    {
        return view('livewire.subastas.live.live.buttom');
    }
}
