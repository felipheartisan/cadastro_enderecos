<?php

namespace App\Http\Requests\Endereco;

use Illuminate\Foundation\Http\FormRequest;

class SalvarRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'cep' => 'required|string',
            'logradouro' => 'required|string',
            'bairro' => 'required|string',
            'cidade' => 'required|string',
            'estado' => 'required|string',
            'numero' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'cep.required' => 'CEP é um campo obrigatório.',
            'logradouro.required' => 'Rua é um campo obrigatório',
            'bairro.required' => 'Bairro é um campo obrigatório',
            'cidade.required' => 'Cidade é um campo obrigatório',
            'estado.required' => 'Estado é um campo obrigatório',
            'numero.required' => 'Número é um campo obrigatório',
        ];
    }
}
