<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index', [
        'userName' => 'Nome do usuário',
        'userDescription' => 'Uma descrição onde o usuário pode falar sobre seu trabalho ou deixar informações que ache importante',
        'userImage' => null // Pode ser uma URL de imagem
    ]);
});

Route::get('/exemplo', function () {
    return view('exemplo-componentes');
});
