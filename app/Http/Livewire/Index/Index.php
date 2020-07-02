<?php

namespace App\Http\Livewire\Index;

use App\Company;
use Livewire\Component;

class Index extends Component
{
    public $usuarios;
    public $resultado;
    public $buscar;
    public $empresas;
    public $picked;

    public function mount()
    {
        $this->usuarios = [];
        $this->resultado = [];
        $this->buscar = "";
        $this->picked = true;
        $this->empresas = Company::all();
    }

    public function render()
    {
        return view('livewire.index.index');
    }
}
