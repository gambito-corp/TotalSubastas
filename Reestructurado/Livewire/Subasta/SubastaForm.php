<?php

namespace App\Http\Livewire\Subasta;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SubastaForm extends Component
{

    public $user;
    public $puja = 100;
    public $producto;


    public function __construct()
    {
    }

    public function mount()
    {
        dd('hola');
    }

    public function hydrate()
    {
        dd($this->precio);
    }

    public function Pujar($puja)
    {
        $this->producto->precio  = $this->producto->precio + $puja;
        $this->emit('Pujar');
    }

    public function render()
    {
        return view('livewire.subasta.subasta-form');
    }
}
