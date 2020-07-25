<?php

namespace App\Http\Livewire\Admin\Form\Paises;

use App\Country;
use Livewire\Component;

class Update extends Component
{
    public $pais;

    public $paises;
    public $parent_id1;
    public $parent_id2;
    public $departamentos;
    public $provincias;
    public $nombre;
    public $descripcion;
    public $codigo;

    public function mount($pais, $paises){
        $this->pais = $pais;
        $this->paises = $paises;
        $this->nombre = $this->pais->nombre;
        $this->descripcion = $this->pais->descripcion;
        $this->codigo = $this->pais->codigo;
        if(isset($pais->Parent->Parent->parent_id)) {
            $this->departamentos = Country::where('parent_id', $pais->Parent->Parent->parent_id)->get();
            $this->provincias = Country::where('parent_id', $pais->Parent->parent_id)->get();
        }
        elseif(isset($pais->Parent->parent_id)) {
            $this->departamentos = Country::where('parent_id', $pais->Parent->parent_id)->get();
            $this->provincias = Country::where('parent_id', $pais->parent_id)->get();
        }
        elseif(isset($pais->parent_id)) {
            $this->departamentos = Country::where('parent_id', $pais->parent_id)->get();
            $this->provincias = Country::where('parent_id', $pais->id)->get();
        }else{
            $this->departamentos = Country::where('parent_id', $pais->id)->get();
            $this->provincias = Country::where('parent_id', $this->departamentos[0]->id)->get();
        }
    }

    public function updatedParentid1()
    {
        $departamentos = Country::where('parent_id', $this->parent_id1)->get();
        $this->departamentos = $departamentos;
    }

    public function updatedParentid2()
    {
        $provincias = Country::where('parent_id', $this->parent_id2)->get();
        $this->provincias = $provincias;
    }

    public function render()
    {
        return view('livewire.admin.form.paises.update');
    }
}
