<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatsController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Grupo de vistas con permisos
Route::middleware(['auth', 'verified'])->group(function () {
    // Rutas compromisos
    Route::view('compromisos', 'compromises.index')->name('compromisos');
    Route::view('crear-compromiso', 'compromises.create')->name('crear-compromiso');
    Route::view('editar-compromiso', 'compromises.edit')->name('editar-compromiso');
    Route::view('mostrar-compromiso', 'compromises.show')->name('mostrar-compromiso');

    // Rutas ficha de compromisos
    Route::view('fichas', 'commitment_form.index')->name('fichas');
    Route::view('crear-ficha', 'commitment_form.create')->name('crear-ficha');
    Route::view('editar-ficha', 'commitment_form.edit')->name('editar-ficha');
    Route::view('mostrar-ficha', 'commitment_form.show')->name('mostrar-ficha');

    // Rutas Planeación de Compromisos
    Route::view('planes', 'commitment_planning.index')->name('planes');
    Route::view('crear-plan', 'commitment_planning.create')->name('crear-plan');
    Route::view('editar-plan', 'commitment_planning.edit')->name('editar-plan');
    Route::view('mostrar-plan', 'commitment_planning.show')->name('mostrar-plan');

    // Rutas de cumplimiento
    Route::view('cumplimiento', 'commitment_performance.index')->name('cumplimiento');
    Route::view('crear-cumplimiento', 'commitment_performance.create')->name('crear-cumplimiento');
    Route::view('editar-cumplimiento', 'commitment_performance.edit')->name('editar-cumplimiento');
    Route::view('mostrar-cumplimiento', 'commitment_performance.show')->name('mostrar-cumplimiento');
});
// Nueva ruta para estadísticas
Route::get('/stats', [StatsController::class, 'index'])
    ->middleware(['auth']) // ✅ Solo usuarios autenticados
    ->name('stats');

require __DIR__.'/auth.php';
