<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonaRequest extends FormRequest
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
            "nombres" => "required|max:70",
            "apellidos" => "required",
            "dni" => "required",
            "telefono" => "required",
            "direccion" => "required",
            "uidUsuario" => "required",
            "sexo" => "required"
        ];
    }
}
