<?php

use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ViewController::class, 'login'])->name('login');
Route::post('/logar', [ViewController::class, 'logar'])->name('logar');
Route::get('/sair', [ViewController::class, 'sair'])->name('sair');

Route::middleware(['medico.auth'])->group(function () {
    Route::get('/cadastro', [ViewController::class, 'cadastro'])->name('cadastro');
    Route::post('/cadastrar', [ViewController::class, 'cadastrar'])->name('cadastrar');
    Route::get('/pacientes', [ViewController::class, 'listaPacientes'])->name('pacientes');
});
