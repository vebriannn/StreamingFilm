<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Member\AuthController;
use App\Http\Controllers\Member\DashboardMemberController;
use App\Http\Controllers\Member\PricingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'index')->name('home');
Route::view('/movie', 'movie')->name('movie');
Route::view('/pricing', 'pricing')->name('pricing');
Route::get('/login', [AuthController::class, 'index'])->name('member.login');
Route::post('/login', [AuthController::class, 'auth'])->name('member.login.auth');
Route::get('/register', [AuthController::class, 'register'])->name('member.register');
Route::post('/register', [AuthController::class, 'regStore'])->name('member.register.store');

Route::group(['prefix' => 'member', 'middleware' => 'member.middleware'], function () {
    Route::get('/dashboard', [DashboardMemberController::class, 'index'])->name('member.dashboard');
    // Route::get('/dashboard/film/', [DashboardMemberController::class, 'searchFilm'])->name('member.film.search');
    Route::get('/dashboard/film/view/{id}', [DashboardMemberController::class, 'showFilm'])->name('member.film.view');
    Route::get('/transaction/pricing/{tipe}', [PricingController::class, 'transaction'])->name('member.pricing.buy');
    Route::get('/logout', [AuthController::class, 'logout'])->name('member.logout');
});
