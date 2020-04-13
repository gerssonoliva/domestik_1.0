<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Create_Bancos_Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //Ponemos en TRUE para que todos quienes usen el sistema puedan utilizar este método
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required'
        ];
    }
}
