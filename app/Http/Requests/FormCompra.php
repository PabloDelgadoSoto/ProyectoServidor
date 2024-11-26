<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormCompra extends FormRequest
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
            'cantidad'=> 'required|integer|min:1'
        ];
    }

    public function messages():array{
        return [
            'cantidad.required'=> 'Introduce una cantidad que comprar',
            'cantidad.integer'=> 'La cantidad debe ser un número entero',
            'cantidad.min'=> 'La cantidad debe ser mínimo 1'
        ];
    }
}
