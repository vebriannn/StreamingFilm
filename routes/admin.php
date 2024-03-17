<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MoviesController;


Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/movies', [MoviesController::class, 'index'])->name('admin.movies');
Route::get('/movies/create', [MoviesController::class, 'create'])->name('admin.movies.create');
Route::post('/movies/create', [MoviesController::class, 'store'])->name('admin.movies.create.store');

