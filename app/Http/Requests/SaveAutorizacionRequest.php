<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str as Str;
use Illuminate\Validation\Rule;

class SaveAutorizacionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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
        if($this->input('crear') == 'Crear Rol' || $this->input('crear') == 'Crear Permiso' || $this->input('crear') == 'Crear Aujtorizacion'){
            $this->merge([
                'slug' =>Str::slug(strtolower($this->input('nombre')))
            ]);
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
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
}
