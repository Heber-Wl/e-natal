<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function login() {
        return view('login');
    }
    public function logar(Request $request) {

        $credenciais = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::guard('medico')->attempt($credenciais)) {
            return redirect()->route('cadastro');
        }
        
        return redirect()->route('login');
    }

    public function sair(Request $request) {
        Auth::guard('medico')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    
    public function cadastro()
    {
        return view('cadastro');
    }

    public function listaPacientes()
{
    return view('pacientes'); 
}
}
