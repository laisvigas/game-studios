<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudioController;

Route::get('/', [StudioController::class, 'index'])->name('studios.index');
