<?php

use App\Http\Controllers\ExamesController;
use App\Http\Controllers\MedicamentosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VaccinesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserDetailsController;
use App\Http\Controllers\UserDetailsMedicalController;
use App\Http\Controllers\CartaoSusController;
use App\Http\Controllers\CartaoConvenioController;
use App\Http\Controllers\InformacoesClinicasController;
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

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/profile', [UserDetailsController::class, 'index'])->name('profile');
    Route::get('/profile-update', [UserDetailsController::class, 'create'])->name('profile.create');
    Route::post('/profile-update', [UserDetailsController::class, 'store'])->name('profile.store');
    Route::get('/profile/edit/{id}', [UserDetailsController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update/{id}', [UserDetailsController::class, 'update'])->name('profile.update');
    Route::delete('/profile/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    Route::get('/alterar-senha', function () {
        return view('profile.partials.update-password-form');
    })->name('alterarSenha');

    
    Route::get('/meu-sus', [CartaoSusController::class, 'index'])->name('meuSus');
    Route::post('/editar-sus', [CartaoSusController::class, 'store'])->name('sus.store');
    Route::put('/editar-sus/update/{id}', [CartaoSusController::class, 'update'])->name('sus.update');
    
    Route::get('/meu-convenio', [CartaoConvenioController::class, 'index'])->name('meuConvenio');
    Route::post('/editar-convenio', [CartaoConvenioController::class, 'store'])->name('convenio.store');
    Route::put('/editar-convenio/update/{id}', [CartaoConvenioController::class, 'update'])->name('convenio.update');
    
    Route::get('/clinical-details', [InformacoesClinicasController::class, 'index'])->name('infoClinicas');
    Route::post('/editar-info-clinica', [InformacoesClinicasController::class, 'store'])->name('infoClinica.store');
    Route::put('/editar-info-clinica/update/{id}', [InformacoesClinicasController::class, 'update'])->name('infoClinica.update');


    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/meus-exames', [ExamesController::class, 'index'])->name('meusExames');
    Route::get('/cad-novo-exame', [ExamesController::class, 'create'])->name('novoCadExame');
    Route::post('/cad-novo-exame', [ExamesController::class, 'store'])->name('saveNewExam');
    Route::get('/meus-exames/delete/{id}', [ExamesController::class, 'destroy'])->name('deleteExame');
    Route::get('/meus-exames/edit/{id}', [ExamesController::class, 'edit'])->name('editExames');
    Route::put('/meus-exames/update/{id}', [ExamesController::class, 'update'])->name('updateExames');

    Route::get('/minhas-vacinas', [VaccinesController::class, 'index'])->name('myVaccines');
    Route::get('/cad-novo-vacina', [VaccinesController::class, 'create'])->name('createNewVaccine');
    Route::post('/cad-novo-vacina', [VaccinesController::class, 'store'])->name('saveNewVaccine');
    Route::get('/minhas-vacinas/delete/{id}', [VaccinesController::class, 'destroy'])->name('deleteVaccine');
    Route::get('/minhas-vacinas/edit/{id}', [VaccinesController::class, 'edit'])->name('editVaccine');
    Route::put('/minhas-vacinas/update/{id}', [VaccinesController::class, 'update'])->name('updateVaccine');

    Route::get('/meus-medicamentos', [MedicamentosController::class, 'index'])->name('meusMedicamentos');
    Route::get('/cad-novo-medicamentos', [MedicamentosController::class, 'create'])->name('novoCadMedicamentos');
    Route::post('/cad-novo-medicamentos', [MedicamentosController::class, 'store'])->name('saveNewMedicamentos');
    Route::get('/meus-medicamentos/delete/{id}', [MedicamentosController::class, 'destroy'])->name('deleteMedicamentos');
    Route::get('/meus-medicamentos/edit/{id}', [MedicamentosController::class, 'edit'])->name('editMedicamentos');
    Route::put('/meus-medicamentos/update/{id}', [MedicamentosController::class, 'update'])->name('updateMedicamentos');

});



require __DIR__ . '/auth.php';