<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'primerNombre'      => 'required',
            'segundoNombre'     => 'required',
            'primerApellido'    => 'required',
            'segundoApellido'   => 'required',
            'telefono'          => 'required|unique',
            'dni'               => 'required|unique',
            'digitoVerificado'  => 'required',
            'dniAdelante'       => 'required',
            'dniDetras'         => 'required',
        ];
    }
    public function messages()
    {
        return [
            'primerNombre.required' => 'Escribe tu primer Nombre'
        ];
    }
}
