<?php

namespace App\Http\Livewire\Subastas\Show\Show;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Helpers\Gambito;

class Buttom extends Component
{
    public $producto;
    public $estado;
    public $tyc;
    protected $listeners = ['refreshChildren'];

    public function mount($producto)
    {
        $this->producto = $producto;
    }

    public function estado()
    {
        $user = Gambito::checkUser();
        $this->estado = Gambito::checkEstado($this->producto, $user->id);
    }

    public function pujar()
    {
        dd($this->tyc);
        $this->producto->precio += $this->producto->puja;
        $this->producto->user_id = Auth::user()->id;
        $this->producto->update();
        $this->estado();
        $this->emitUp('refresh');
    }

    public function render()
    {
        return view('livewire.subastas.show.show.buttom');
    }
}
