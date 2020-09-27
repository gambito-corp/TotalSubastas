<?php

namespace App\View\Components;

use Illuminate\View\Component;

class email extends Component
{
    public $titulo;
    public $ruta;
    public $submit;
    public $metodo;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titulo, $ruta, $submit, $metodo = 'post')
    {
        $this->titulo = $titulo;
        $this->ruta = ($submit != null)?$ruta:null;
        $this->submit = ($submit != null)?$submit:null;
        $this->metodo = ($submit != null)?$metodo:null;
    }

    public function render()
    {
        return view('components.email');
    }
}
