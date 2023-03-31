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
    return view('index');
});

Route::get('/funcionalidades', function () {
    return view('funcionalidades');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/novo', function () {
    return view('novoCadastro');
});

Route::get('/novo-cad-exame', function () {
    return view('novoCadExame');
});

Route::get('/novo-cad-vacina', function () {
    return view('novoCadVacina');
});


Route::get('/perfil', function () {
    return view('perfilPaciente');
});

Route::get('/meus-exames', function () {
    return view('meusExames');
});

Route::get('/minhas-vacinas', function () {
    return view('minhasVacinas');
});



