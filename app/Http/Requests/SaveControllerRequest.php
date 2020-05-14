<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str as Str;
use Illuminate\Validation\Rule;

class SaveControllerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->input('nombre') == 'papelera' || $this->input('nombre') == 'crear' || $this->input('nombre') == 'actualizar'){
            return false;
        }
        if($this->input('slug') == 'papelera' || $this->input('slug') == 'crear' || $this->input('slug') == 'actualizar'){
            return  false;
        }
        return true;
    }
    
    
    protected function prepareForValidation()
    {
        if($this->input('crear') == 'Crear Controlador'){
            $this->merge([
                'slug' =>Str::slug(strtolower($this->input('nombre')))
                ]);
            }
            
    }
        
    public function attributes()
    {
        
        return [
            'slug' => Str::slug(strtolower($this->input('nombre'))),
            'nombre' => $this->input('nombre'),
            'descripcion' => $this->input('descripcion'),
        ];
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
                Rule::unique('autorizaciones')->ignore($this->route('autorizacion')),
            ],
            'slug' => [
                'required',
                'alpha_dash',
                Rule::unique('autorizaciones')->ignore($this->route('autorizacion'))
            ],
            'descripcion' => ['string'],
        ];
    }
}
