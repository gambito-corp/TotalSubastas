<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str as Str;


class SaveRoleRequest extends FormRequest
{

    public function authorize()
    {
        // return Gate::authorize('create', new \App\Rol);
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
        if($this->input('crear') == 'Crear Rol'){
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
                Rule::unique('roles')->ignore($this->route('rol')),
            ],
            'slug' => [
                'required',
                'alpha_dash',
                Rule::unique('roles')->ignore($this->route('rol'))
            ],
            'descripcion' => ['string'],
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El Rol Necesita un nombre',
            'descripcion.string' => 'la descripcion debe ser texto',
            'slug.required' => 'el slug es obligatorio',
            'slug.unique' => 'este slug ya fue registrado',
            'nombre.unique' => 'Este Nombre de Rol ya se creo'
        ];
    }
}
