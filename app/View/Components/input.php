<?php

namespace App\View\Components;

use Illuminate\View\Component;

class input extends Component
{
    public $label, $nombre, $valor, $ayuda;

    public function __construct($label, $nombre, $valor, $ayuda)
    {

        $this->label = $label;
        $this->nombre = $nombre;
        $this->valor = $valor;
        $this->ayuda = $ayuda;
    }

    public function render()
    {
        return view('components.input');
    }
}
