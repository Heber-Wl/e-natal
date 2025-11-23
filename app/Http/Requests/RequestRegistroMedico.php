<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestRegistroMedico extends FormRequest
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
            'email' => 'required|email|unique:medico,email',
            'password' => 'required|string|min:8|confirmed',
            'cpf' => 'required|string|min:14|unique:medico,cpf',
            'crm_coren' => 'required|string|min:8',
        ];
    }
    public function attributes(): array
    {
        return [
            'nome' => 'Nome',
            'email' => 'E-mail',
            'password' => 'Senha',
            'password_confirmation' => 'Confirmação de senha',
            'cpf' => 'CPF',
            'crm_coren' => 'CRV',
        ];
    }
    public function messages(): array
    {
        return [
            'nome.required' => 'O campo :attribute é obrigatório.',
            'email.required' => 'O campo :attribute é obrigatório.',
            'email.email' => 'O campo :attribute deve ser um e-mail válido.',
            'email.unique' => 'O :attribute já está em uso.',
            'password.required' => 'O campo :attribute é obrigatório.',
            'password.min' => 'O campo :attribute deve ter no mínimo :min caracteres.',
            'password.confirmed' => 'A confirmação de senha não corresponde.',
            'cpf.required' => 'O campo :attribute é obrigatório.',
            'cpf.min' => 'O campo :attribute deve ter no mínimo :min caracteres.',
            'cpf.unique' => 'O :attribute já está em uso.',
            'crv.required' => 'O campo :attribute é obrigatório.',
            'crv.min' => 'O campo :attribute deve ter no mínimo :min caracteres.',
            'crv.unique' => 'O :attribute já está em uso.',
        ];
    }
}
