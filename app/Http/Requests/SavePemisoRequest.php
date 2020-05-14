<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str as Str;
use Illuminate\Validation\Rule;

class SavePemisoRequest extends FormRequest
{

    public function authorize()
    {
        if($this->input('nombre') == 'papelera' || $this->input('nombre') == 'crear' || $this->input('nombre') == 'actualizar'){
            return false;
        }
        if($this->input('slug') == 'papelera' || $this->input('slug') == 'crear' || $this->input('slug') == 'actualizar'){
            return  false;
        }
        return true;
    }
    
    protected function prepareForValidation():void
    {
        if($this->input('crear') == 'Crear Permiso'){
            $this->merge([
                'slug' =>Str::slug(strtolower($this->input('nombre')))
            ]);
        }
    }

    public function rules()
    {
        
        return [
            'nombre' => [
                'required',
                Rule::unique('permisos')->ignore($this->route('permiso')),
            ],
            'slug' => [
                'required',
                'alpha_dash',
                Rule::unique('permisos')->ignore($this->route('permiso'))
            ],
            'descripcion' => ['string'],
        ];
    }
}
