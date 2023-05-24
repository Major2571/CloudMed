<?php

use App\Http\Controllers\ExamesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VacinasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserDetailsController;
use App\Models\UserDetails;
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


Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/profile', [UserDetailsController::class, 'index'])->name('profile.edit');

    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/meus-exames', [ExamesController::class, 'index'])->name('meusExames');
    Route::get('/cad-novo-exame', [ExamesController::class, 'create'])->name('novoCadExame');
    Route::post('/cad-novo-exame', [ExamesController::class, 'store'])->name('saveNewExam');
    Route::get('/meus-exames/delete/{id}',  [ExamesController::class, 'destroy'])->name('deleteExame');
    Route::get('/meus-exames/edit/{id}',  [ExamesController::class, 'edit'])->name('editExames');
    Route::put('/meus-exames/update/{id}',  [ExamesController::class, 'update'])->name('updateExames');

    
    Route::get('/minhas-vacinas', [VacinasController::class, 'index'])->name('minhasVacinas');
    Route::get('/cad-novo-vacina', [VacinasController::class, 'create'])->name('novoCadVacina');
    Route::post('/cad-novo-vacina', [VacinasController::class, 'store'])->name('saveNewVaccine');
    Route::get('/minhas-vacinas/delete/{id}',  [VacinasController::class, 'destroy'])->name('deleteVacina');
    Route::get('/minhas-vacinas/edit/{id}',  [VacinasController::class, 'edit'])->name('editVacina');
    Route::put('/minhas-vacinas/update/{id}',  [VacinasController::class, 'update'])->name('updateVacina');
    
});



require __DIR__ . '/auth.php';
