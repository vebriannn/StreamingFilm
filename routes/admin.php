<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MoviesController;
use App\Http\Controllers\Admin\Alert;


// admin pages login
// Route::get('/login', [DashboardController::class, 'index'])->name('admin.dashboard');
// Route::get('/register', [DashboardController::class, 'index'])->name('admin.dashboard');

// admin oages setting
Route::get('/profile/setting', [DashboardController::class, 'showProfile'])->name('admin.setting');

// admin pages movies
Route::get('/movies', [MoviesController::class, 'index'])->name('admin.movies');
Route::get('/movies/create', [MoviesController::class, 'create'])->name('admin.movies.create');
Route::get('/movies/edit/{id}', [MoviesController::class, 'edit'])->name('admin.movies.edit');

Route::post('/movies/create', [MoviesController::class, 'store'])->name('admin.movies.create.store');
Route::put('/movies/update/{id}', [MoviesController::class, 'updated'])->name('admin.movies.edit.update');

Route::delete('/movies/delete/{id}', [MoviesController::class, 'destroy'])->name('admin.movies.delete');

// admin pages users
Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/users/edit/{id}', [DashboardController::class, 'edit'])->name('admin.users.edit');

Route::put('/users/updated/{id}', [DashboardController::class, 'updated'])->name('admin.users.edit.update');

Route::delete('/users/delete/{id}', [DashboardController::class, 'destroy'])->name('admin.users.delete');
