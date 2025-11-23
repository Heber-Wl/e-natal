<?php

namespace App\Http\Services;

use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;

class MedicoService
{
    public function cadastrarPaciente($request) {
        
        Paciente::create([
            'nome' => $request->nome,
            'cartao_sus' => $request->cartao_sus,
            'peso' => $request->peso,
            'altura' => $request->altura,
            'data_nascimento' => $request->data_nascimento,
            'data_ultima_mestruacao' => $request->data_ultima_mestruacao,
            'primeira_gestacao' => $request->boolean('primeira_gestacao'),
            'gestacao_multipla' => $request->boolean('gestacao_multipla'),
            'reproducao_assistida' => $request->boolean('reproducao_assistida'),
            'perda_gestacional' => $request->boolean('perda_gestacional'),
            'ambiente_estressante' => $request->boolean('ambiente_estressante'),
            'gestacao_planejada' => $request->boolean('gestacao_planejada'),
            'aceita_gravidez' => $request->boolean('aceita_gravidez'),
            'historico_psiquiatrico' => $request->boolean('historico_psiquiatrico'),
            'pre_eclampsia' => $request->boolean('pre_eclampsia'),
            'diabetes_mellitus' => $request->boolean('diabetes_mellitus'),
            'hipertensao' => $request->boolean('hipertensao'),
            'doenca_tiroide' => $request->boolean('doenca_tiroide'),
            'medico_id' => Auth::guard('medico')->user()->id,
        ]);
    }
}