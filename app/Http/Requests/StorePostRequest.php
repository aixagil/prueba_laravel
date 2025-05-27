<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request. Valida que el usuario que envia el formulario es un usuario autorizado  */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * Se deben colocar todas las reglas que se desean verificar
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titulo' => 'required|min:5|max:250', //esta es una forma de expresar las validaciones, con | dentro del ' ' 
            'slug' => ['required', 'min:5', 'max:100', 'unique:posts'], //otra forma es esta
            'contenido' => 'required',
            'categoria' => 'required',
        ];
    }

    public function messages() {
        return [
            'titulo.required' => 'El campo titulo es requerido.',
            'slug.required' => 'El campo slug es requerido.',
            'contenido.required' => "El campo contenido es requerido.",
            'categoria.required' => "El campo categoria es requerido.",
            
        ];
    }

    /*public function attributes() //trabajan por separado con messages 
    {
        return [
            'titulo' => 'name',
        ];
    }*/
}
