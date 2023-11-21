<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateVagaRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string|max:500',
            'localizacao' => 'required|string|max:255',
            'nivel' => 'required|string|max:255',
            'contrato' => 'string|max:10',
            'salario' => 'numeric',
            'empresa' => 'required|string|max:255',
            'tecnologias' => 'required|string|max:255',
            'site' => 'required|string|max:255',
        ];
    }
}
