<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Cache;

class CreateUserRequest extends FormRequest
{
    public $tipo;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $this->tipo = session('tipo');
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if($this->tipo == 'natural'){
            return [
                "nombre"    => 'required|string',
                "apellido"  => 'required|string',
                'email'     => 'required|email|unique:users',
                "tel"       => 'required|string',
                "dni"       => 'required|string',
                "password"  => 'required|string',
                "Check"     => 'required'
            ];
        }elseif($this->tipo == 'juridica'){
            return [
                "nombre"        => 'required|string',
                "razon_social"  => 'required|string',
                'banco_id'      => 'required',
                'numero_cuenta' => 'required',
                'email'         => 'required|email|unique:users',
                "tel"           => 'required|string',
                "ruc"           => 'required|string',
                "password"      => 'required|string',
                "Check"         => 'required'
            ];
        }
    }
}
