<?php

use App\Http\Controllers\ExamesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VacinasController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/login-userCloud', function () {
    return view('login-userCloud');
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


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', [WelcomeController::class, 'index'])->name('dashboard');

    Route::get('/novo-cad-exame', function () {
        return view('novoCadExame');
    })->middleware(['auth', 'verified'])->name('novoCadExame');
    Route::get('/meus-exames', [ExamesController::class, 'index'])->name('meusExames');
    // Route::get('/cad-novo-exame', [ExamesController::class, 'create'])->name('exame.create');
    Route::post('/cad-novo-exame', [ExamesController::class, 'store']);
    Route::get('/meus-exames/delete/{id}',  [ExamesController::class, 'destroy']);


    Route::get('/novo-cad-vacina', function () {
        return view('novoCadVacina');
    })->middleware(['auth', 'verified'])->name('novoCadVacina');
    Route::get('/minhas-vacinas', [VacinasController::class, 'index'])->name('minhasVacinas');
    // Route::get('/cad-novo-vacina', [VacinasController::class, 'create']);
    Route::post('/cad-novo-vacina', [VacinasController::class, 'store']);
    
});



require __DIR__ . '/auth.php';
