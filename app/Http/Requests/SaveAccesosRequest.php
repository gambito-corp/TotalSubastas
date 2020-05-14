<?php

namespace App\Http\Requests;

use App\Acceso;
// use Illuminate\Contracts\Validation\Rule;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;


class SaveAccesosRequest extends FormRequest
{



    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        // dd($this->input(), 'rules');
        return [
            'rol_id' => [
                'required'
            ],
            'autorizacion_id' => [
                'required'
            ],
            'permiso_id' => Rule::unique('accesos')->where(function($query){
                    return $query->where('rol_id', $this->input('rol_id'))->where('autorizacion_id', $this->input('autorizacion_id'));
                })
            
        ];
    }
}
