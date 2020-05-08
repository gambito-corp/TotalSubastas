<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class LoginRequest extends FormRequest
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

    protected function prepareForValidation()
    {
        if(filter_var($this->input('user'), FILTER_VALIDATE_EMAIL)){
            $campo = 'email';
        }elseif(is_numeric($this->input('user'))){
           $campo = 'telefono';
        }else {
            $campo = 'username';
        }
        $this->merge([
            $campo => $this->input('user')
        ]);
        return $campo;

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            $this->prepareForValidation() => [
                'required',
                'string'
            ],
            'password' => [
                'required',
                'string'
                ]
            ];

    }
}
