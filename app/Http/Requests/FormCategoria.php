<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormCategoria extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array{
        return [
            'posicion'=> 'required|numeric|min:1|unique:categorias'
        ];
    }

    public function messages():array{
        return [
            'posicion.min'=> 'La posición debe ser mínimo 1',
            'posicion.numeric'=> 'La posición debe ser un número',
            'posicion.unique'=> 'La posición ya está en uso'
        ];
    }
}
