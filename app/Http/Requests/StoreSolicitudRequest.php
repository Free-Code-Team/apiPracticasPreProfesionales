<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSolicitudRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "representante" => "required|max:70",
            "estado" => "required",
            "idEmpresa" => "required",
            "idEstudiante" => "required"
        ];
    }
}
