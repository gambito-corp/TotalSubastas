<?php

namespace App\Http\Requests;

use App\Acceso;
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
        return [
            'rol_id' => [
                'required'
            ],
            'autorizacion_id' => [
                'required'
            ]
        ];
    }
}
