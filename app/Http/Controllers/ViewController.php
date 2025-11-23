<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestRegistroPaciente;
use App\Http\Services\MedicoService;
use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function __construct(private MedicoService $medicoService)
    {
        //
    }
    public function login() {
        return view('login');
    }
    public function logar(Request $request) {

        $credenciais = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::guard('medico')->attempt($credenciais)) {
            return redirect()->route('cadastro')->with('success', 'Login realizado com sucesso!');
        }
        
        return redirect()->route('login')->with('error', 'Credenciais inválidas. Por favor, tente novamente.');
    }

    public function sair(Request $request) {
        Auth::guard('medico')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('info', 'Logout realizado com sucesso!');
    }
    public function cadastro()
    {
        return view('cadastro');
    }
    public function cadastrar(RequestRegistroPaciente $request) {
        try {
            $this->medicoService->cadastrarPaciente($request);
            return redirect()->route('cadastro')->with('success', 'Paciente cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('cadastro')->with('error', 'Erro ao cadastrar paciente: ');
        }
    }
    public function listaPacientes()
    {
        $pacientes = Paciente::where('medico_id', Auth::guard('medico')->user()->id)->get();
        return view('pacientes', [
            'pacientes' => $pacientes
        ]); 
    }

    public function cadastroMedico()
    {
        return view('cadastroMedico'); 
    }

    public function detalhes($id)
    {
        $paciente = Paciente::find($id);

        if ($paciente->medico_id !== Auth::guard('medico')->user()->id) {
            return redirect()->route('pacientes')->with('error', 'Acesso negado ao paciente solicitado.');
        }
        $idade = \Carbon\Carbon::parse($paciente->data_nascimento)->age;
        $imc = $paciente->peso / ($paciente->altura * $paciente->altura);
        return view('detalhesPaciente', [
            'paciente' => $paciente,
            'idade' => $idade,
            'imc' => $imc
        ]); 
    }

    public function recomendacoes()
    {
        return view('recomedacoes'); 
    }
}
