<?php

namespace App\Http\Livewire\Admin\Form\Modelo;

use Livewire\Component;
use App\Brand;

class Update extends Component
{
    public $marcas;
    public $modelos;
    public $parent_id;


    public function mount ($data)
    {
        $this->parent_id = 1;
        $this->marcas = Brand::where('parent_id', null)->get();
        $this->modelos = Brand::where('parent_id', $data->marca_id)->get();

    }

    public function updatedParentid()
    {
        $this->modelos = Brand::where('parent_id', $this->parent_id)->get();
    }
    public function render()
    {
        return view('livewire.admin.form.modelo.update');
    }
}
