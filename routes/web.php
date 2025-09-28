<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\GameController;

// studios
Route::get('/', [StudioController::class, 'index'])->name('studios.index');
Route::post('/studios', [StudioController::class, 'store'])->name('studios.store');
Route::get('/studios/{studio}/edit', [StudioController::class, 'edit'])->name('studios.edit');
Route::put('/studios/{studio}', [StudioController::class, 'update'])->name('studios.update');
Route::delete('/studios/{studio}', [StudioController::class, 'destroy'])->name('studios.destroy');

// games
Route::get('/studios/{studio}/games', [GameController::class, 'indexByStudio'])->name('studios.games.index');