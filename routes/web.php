<?php

use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ViewController::class, 'login'])->name('login');
Route::get('/cadastro', [ViewController::class, 'cadastro'])->name('cadastro');
