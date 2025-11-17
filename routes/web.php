<?php

use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ViewController::class, 'paginaInicial'])->name('paginaInicial');
Route::get('/cadastro', [ViewController::class, 'cadastro'])->name('cadastro');