<?php

namespace App\Http\Livewire\Admin\Form\Modelo;

use Livewire\Component;
use App\Brand;

/**
 * Class Create
 * @package App\Http\Livewire\Admin\Form\Modelo
 */
class Create extends Component
{
    public $marcas;
    public $modelos;
    public $parent_id;


    /**
     * @param $marcas
     * @param $modelos
     */
    public function mount ()
    {
        $this->parent_id = 1;
        $this->marcas = Brand::where('parent_id', null)->get();
        $this->modelos = Brand::where('parent_id', $this->parent_id)->get();

    }

    public function updatedParentid()
    {
        $this->modelos = Brand::where('parent_id', $this->parent_id)->get();
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.admin.form.modelo.create');
    }
}
