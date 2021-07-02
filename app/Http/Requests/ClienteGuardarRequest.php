<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteGuardarRequest extends FormRequest
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
            "urldestino" =>"required",
            "whatsapp" =>"required|max:10",
            "nombre" =>"required",
            "referencia" =>"required",
            "cobrar" =>"required",
            "descripcion" =>"required",
            "foto" =>"required",
            "cordenadax" =>"required",
            "cordenaday" =>"required",
        ];
    }
}
