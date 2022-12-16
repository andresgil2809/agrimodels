<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Planta;

class StorePlantas extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre'=> 'required|max:100',
            'tipodesuelo' => 'required|max:100',
            'plantasxmt2' => 'required|numeric',
            'altitud' => 'required|numeric',
            'temperatura' => 'required|numeric',
            'humedad' => 'required|numeric',
        ];
    }

    public function attributes()
    {
        return[
            'nombre'=> 'nombre de la planta',
        ];
    }

    public function messages()
    {
        return[
            'tipodesuelo.required'=> 'Debe igresar un tipo de suelo'
        ];
    }
}
