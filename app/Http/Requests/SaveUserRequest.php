<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class SaveUserRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
                'max:100'
            ],
            "username" => [
                'required',
                'alpha_dash',
                Rule::unique('users')->ignore($this->route('user')->id),
                'max:100'
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($this->route('user')->id),
            ],
            "telefono" => [
                'required',
                Rule::unique('users')->ignore($this->route('user')->id),
            ],
            
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El campo de Nombre Debe de tener tu nombre completo',
            'name.string' => 'El campo de nombre solo acepta texto',
            'name.max' => 'Tu nombre es demasiado largo, usa uno mas corto',

            'username.required' => 'El nombre de usuario es obligatorio',
            'username.string' => 'El nombre de usuario no puede contener espacios',
            'username.max' => 'El nombre de usuario es demasiado largo',
            'username.unique' => 'El nombre de usuario ya esta tomado, Porfavor Logueate',

            'email.required' => 'El Email es obligatorio',
            'email.string' => 'El Email solo acepta texto',
            'email.email' => 'El Email debe de llevar @ porfavor introduce tu Email',
            'email.max' => 'Este Email es demasiado largo',
            'email.unique' => 'Este Email ya esta Tomado, Porfavor Logueate',

            'telefono.required' => 'El Telefono es Obligatorio',
            'telefono.unique' => 'Este Telefono ya esta Tomado, Porfavor Logueate',

            'password.required' => 'La Contraseña es Obligatoria',
            'password.string' => 'No Aceptada Intenta Otra',
            'password.min' => 'La Contraseña es demasiado cora',
            'password.confirmed' => 'No Coinciden las Contraseñas',

        ];
    }
}
