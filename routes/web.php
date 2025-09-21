<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\GameController;

Route::get('/', [StudioController::class, 'index'])->name('studios.index');
Route::get('/studios/{studio}/games', [GameController::class, 'indexByStudio'])
     ->name('studios.games.index');
