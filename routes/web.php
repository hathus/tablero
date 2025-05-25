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

// Nueva ruta para estadísticas
Route::get('/stats', [StatsController::class, 'index'])
    ->middleware(['auth']) // ✅ Solo usuarios autenticados
    ->name('stats');

require __DIR__.'/auth.php';
