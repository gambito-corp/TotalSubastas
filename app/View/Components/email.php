<?php

namespace App\View\Components;

use Illuminate\View\Component;

class email extends Component
{
    public $titulo;
    public $ruta;
    public $submit;
    public $css;

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
        $this->css = env('APP_URL').'/css/app.css';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.email');
    }
}
