<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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

Route::get('/',[HomeController::class,'showHome'])->name('home');
Route::get('/dashboard', [HomeController::class, 'getUsers'])->name('dashboard')->middleware('auth');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [LoginController::class, 'showRegisterForm'])->name('register');
Route::post('/register/create', [LoginController::class, 'create'])->name('usercreate');
Route::post('/user/update', [LoginController::class, 'update'])->name('updateDetails');
Route::post('/login/check', [LoginController::class, 'login'])->name('userlogin');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
