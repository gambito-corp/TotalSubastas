<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Collection as Collection;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str as Str;


class SaveRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::authorize('create', new \App\roles);
    }


    protected function prepareForValidation():void
    {
        if($this->input('_ruta') == 'rol.store'){
            $this->merge([
                'slug' =>Str::slug($this->input('nombre'))
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

    public function messages()
    {
        return [
            // 'nombre.required' => 'El Rol Necesita un nombre',
            // 'descripcion.string' => 'la descripcion debe ser texto',
            // 'slug.required' => 'el slug es obligatorio',
            // 'slug.unique' => 'este slug ya fue registrado',
            // 'nombre.unique' => 'Este Nombre de Rol ya se creo'
        ];
    }
}
