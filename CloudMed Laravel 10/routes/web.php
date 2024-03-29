<?php

use App\Http\Controllers\ExamsController;
use App\Http\Controllers\MedicationsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VaccinesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserDetailsController;
use App\Http\Controllers\UserDetailsMedicalController;
use App\Http\Controllers\CardSUSController;
use App\Http\Controllers\HealthInsuranceController;
use App\Http\Controllers\ClinicalInformationController;
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

Route::get('/servicos', function () {
    return view('servicos');
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

    
    Route::get('/meu-sus', [CardSUSController::class, 'index'])->name('meuSus');
    Route::post('/editar-sus', [CardSUSController::class, 'store'])->name('sus.store');
    Route::put('/editar-sus/update/{id}', [CardSUSController::class, 'update'])->name('sus.update');
    
    Route::get('/meu-convenio', [HealthInsuranceController::class, 'index'])->name('meuConvenio');
    Route::post('/editar-convenio', [HealthInsuranceController::class, 'store'])->name('convenio.store');
    Route::put('/editar-convenio/update/{id}', [HealthInsuranceController::class, 'update'])->name('convenio.update');
    
    Route::get('/clinical-details', [ClinicalInformationController::class, 'index'])->name('infoClinicas');
    Route::post('/editar-info-clinica', [ClinicalInformationController::class, 'store'])->name('infoClinica.store');
    Route::put('/editar-info-clinica/update/{id}', [ClinicalInformationController::class, 'update'])->name('infoClinica.update');


    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/meus-exames', [ExamsController::class, 'index'])->name('myExams');
    Route::get('/cad-novo-exame', [ExamsController::class, 'create'])->name('createNewExam');
    Route::post('/cad-novo-exame', [ExamsController::class, 'store'])->name('saveNewExam');
    Route::get('/meus-exames/delete/{id}', [ExamsController::class, 'destroy'])->name('deleteExam');
    Route::get('/meus-exames/edit/{id}', [ExamsController::class, 'edit'])->name('editExam');
    Route::put('/meus-exames/update/{id}', [ExamsController::class, 'update'])->name('updateExam');

    Route::get('/minhas-vacinas', [VaccinesController::class, 'index'])->name('myVaccines');
    Route::get('/cad-novo-vacina', [VaccinesController::class, 'create'])->name('createNewVaccine');
    Route::post('/cad-novo-vacina', [VaccinesController::class, 'store'])->name('saveNewVaccine');
    Route::get('/minhas-vacinas/delete/{id}', [VaccinesController::class, 'destroy'])->name('deleteVaccine');
    Route::get('/minhas-vacinas/edit/{id}', [VaccinesController::class, 'edit'])->name('editVaccine');
    Route::put('/minhas-vacinas/update/{id}', [VaccinesController::class, 'update'])->name('updateVaccine');

    Route::get('/meus-medicamentos', [MedicationsController::class, 'index'])->name('myMedications');
    Route::get('/cad-novo-medicamentos', [MedicationsController::class, 'create'])->name('createNewMedications');
    Route::post('/cad-novo-medicamentos', [MedicationsController::class, 'store'])->name('saveNewMedications');
    Route::get('/meus-medicamentos/delete/{id}', [MedicationsController::class, 'destroy'])->name('deleteMedications');
    Route::get('/meus-medicamentos/edit/{id}', [MedicationsController::class, 'edit'])->name('editMedications');
    Route::put('/meus-medicamentos/update/{id}', [MedicationsController::class, 'update'])->name('updateMedications');

});



require __DIR__ . '/auth.php';