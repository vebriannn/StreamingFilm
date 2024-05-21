<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Member\AuthController;
use App\Http\Controllers\Member\DashboardMemberController;

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
Route::get('/login', [AuthController::class, 'index'])->name('member.login');
Route::post('/login', [AuthController::class, 'auth'])->name('member.login.auth');
// Route::get('/register', 'member.auth.register')->name('member.register');

Route::group(['prefix' => 'member'], function () {
    Route::get('/home', [DashboardMemberController::class, 'index'])->name('member.dashboard');
})->middleware('member.middleware');
