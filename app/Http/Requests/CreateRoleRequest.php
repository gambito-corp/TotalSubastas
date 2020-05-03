<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class CreateRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->user()->rol->nombre == 'Superadministrador' || $this->user()->rol->nombre == 'Administrador' ){
            $respuesta = true;
        }else{
            $respuesta = false;
        }

        return $respuesta;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        dd('pase');
        
        return [
            'nombre' => 'required|unique:roles',
            'descripcion' => 'required|string'
        ];
    }
}
