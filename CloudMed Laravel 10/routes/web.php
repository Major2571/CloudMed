<?php

use App\Http\Controllers\ProfileController;
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

// Route::get('/novo-cad-exame', function () {
//     return view('novoCadExame');
// });

// Route::get('/novo-cad-vacina', function () {
//     return view('novoCadVacina');
// });


// Route::get('/profile', function () {
//     return view('perfilPaciente');
// });

// Route::get('/meus-exames', function () {
//     return view('meusExames');
// });

// Route::get('/minhas-vacinas', function () {
//     return view('minhasVacinas');
// });

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/minhas-vacinas', function () {
    return view('minhasVacinas');
})->middleware(['auth', 'verified'])->name('minhasVacinas');

Route::get('/meus-exames', function () {
    return view('meusExames');
})->middleware(['auth', 'verified'])->name('meusExames');

Route::get('/meus-exames', function () {
    return view('meusExames');
})->middleware(['auth', 'verified'])->name('meusExames');

Route::get('/novo-cad-exame', function () {
    return view('novoCadExame');
})->middleware(['auth', 'verified'])->name('novoCadExame');

Route::get('/novo-cad-vacina', function () {
    return view('novoCadVacina');
})->middleware(['auth', 'verified'])->name('novoCadVacina');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
->name('logout');


require __DIR__.'/auth.php';
