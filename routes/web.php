<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\DashboardController;

// public routes
Route::get('/', [StudioController::class, 'index'])->name('studios.index');
Route::get('/about', [StudioController::class, 'about'])->name('about.index');
Route::get('/studios/{studio}/games', [GameController::class, 'indexByStudio'])->name('studios.games.index');
Route::get('/studios/export', [StudioController::class, 'exportStudiosCsv'])->name('studios.export');


// private routes
Route::middleware(['auth'])->group(function () {
    // dashboard 
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    // studios
    Route::post('/studios', [StudioController::class, 'store'])->name('studios.store');
    Route::get('/studios/{studio}/edit', [StudioController::class, 'edit'])->name('studios.edit');
    Route::put('/studios/{studio}', [StudioController::class, 'update'])->name('studios.update');
    Route::delete('/studios/{studio}', [StudioController::class, 'destroy'])->name('studios.destroy');
    Route::post('/studios/import', [StudioController::class, 'importCsv']) ->name('studios.import');

    // games
    Route::get('/games/{game}/edit', [GameController::class, 'edit'])->name('games.edit');
    Route::put('/games/{game}', [GameController::class, 'update'])->name('games.update');
    Route::post('/studios/{studio}/games', [GameController::class, 'store'])->name('games.store');
    Route::delete('/games/{game}', [GameController::class, 'destroy'])->name('games.destroy');
    Route::post('/studios/{studio}/games/import', [GameController::class, 'importCsv'])->name('games.import');
});
