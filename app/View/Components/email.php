<?php

namespace App\View\Components;

use Illuminate\View\Component;

class email extends Component
{
    public $titulo;
    public $ruta;
    public $submit;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titulo, $ruta, $submit)
    {
        $this->titulo = $titulo;
        $this->ruta = $ruta;
        $this->submit = $submit;
    }

    public function render()
    {
        return view('components.email');
    }
}
