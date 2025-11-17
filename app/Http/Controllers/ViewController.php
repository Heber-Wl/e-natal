<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function paginaInicial()
    {
        return view('welcome');
    }


    public function cadastro()
    {
        return view('cadastro');
    }
}
