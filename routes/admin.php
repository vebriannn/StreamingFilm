<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;


Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::view('/movies', 'admin.movies')->name('admin.movies');
Route::view('/movies/create', 'admin.crud.movies.create')->name('admin.movies.create');

