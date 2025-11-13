<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', [MovieController::class, 'index'])->name('home');

Route::get('/movies', [MovieController::class, 'index'])->name('movies');