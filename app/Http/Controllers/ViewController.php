<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestRegistroPaciente;
use App\Http\Services\MedicoService;
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
    public function listaPacientes()
    {
        return view('pacientes'); 
    }
    public function cadastrar(RequestRegistroPaciente $request) {
        try {
            $this->medicoService->cadastrarPaciente($request);
            return redirect()->route('cadastro')->with('success', 'Paciente cadastrado com sucesso!');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->route('cadastro')->with('error', 'Erro ao cadastrar paciente: ');
        }
    }
}