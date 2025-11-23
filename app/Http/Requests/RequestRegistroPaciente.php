<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestRegistroPaciente extends FormRequest
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
            'nome' => 'required|string|max:255',
            'cartao_sus' => 'required|string|max:20',
            'peso' => 'required|numeric',
            'altura' => 'required|numeric',
            'data_nascimento' => 'required|date',
            'data_ultima_mestruacao' => 'nullable|date',
        ];
    }

    public function attributes(): array
    {
        return [
            'nome' => 'Nome',
            'cartao_sus' => 'Cartão SUS',
            'peso' => 'Peso',
            'altura' => 'Altura',
            'data_nascimento' => 'Data de nascimento',
            'data_ultima_mestruacao' => 'Data da última menstruação',
            'primeira_gestacao' => 'Primeira gestação',
            'gestacao_multipla' => 'Gestação múltipla',
            'reproducao_assistida' => 'Reprodução assistida',
            'perda_gestacional' => 'Perda gestacional',
            'ambiente_estressante' => 'Ambiente estressante',
            'gestacao_planejada' => 'Gestação planejada',
            'aceita_gravidez' => 'Aceita gravidez',
            'historico_psiquiatrico' => 'Histórico psiquiátrico',
            'pre_eclampsia' => 'Pré-eclâmpsia',
            'diabetes_mellitus' => 'Diabetes mellitus',
            'hipertensao' => 'Hipertensão',
            'doenca_tiroide' => 'Doença da tireoide',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'O campo :attribute é obrigatório.',
            'string' => 'O campo :attribute deve ser uma string.',
            'max' => 'O campo :attribute não pode ter mais de :max caracteres.',
            'numeric' => 'O campo :attribute deve ser um número.',
            'date' => 'O campo :attribute deve ser uma data válida.',
            'boolean' => 'O campo :attribute deve ser verdadeiro ou falso.',
        ];
    }
}
