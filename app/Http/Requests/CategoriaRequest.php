<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaRequest extends FormRequest
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
            'nameCategoria' => 'required|unique:categorias',
            'estado'        => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nameCategoria.required' => 'Debes ingresar un nombre para la categoria',
            'nameCategoria.unique'   => 'Ya hay una categoria registrada con ese nombre',
            'estado.required'        => 'Debes ingresar un nombre para la categoría'
        ];
    }
}
