<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\DashboardController;

// public routes
Route::get('/', [StudioController::class, 'index'])->name('studios.index');
Route::get('/about', [StudioController::class, 'about'])->name('about.index');
Route::get('/studios/{studio}/games', [GameController::class, 'indexByStudio'])->name('studios.games.index');

// private routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::post('/studios', [StudioController::class, 'store'])->name('studios.store');
    Route::get('/studios/{studio}/edit', [StudioController::class, 'edit'])->name('studios.edit');
    Route::put('/studios/{studio}', [StudioController::class, 'update'])->name('studios.update');
    Route::delete('/studios/{studio}', [StudioController::class, 'destroy'])->name('studios.destroy');
    Route::post('/studios/import', [StudioController::class, 'importCsv']) ->name('studios.import');
});
