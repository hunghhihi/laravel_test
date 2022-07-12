<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\auth\authLogin;
use App\Http\Controllers\auth\authRegister;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/', [authLogin::class, 'checkLogin'])->name('login')->middleware('guest');
Route::get('/course', [CourseController::class, 'index'])->name('course')->middleware('auth');
Route::get('/logout', [authLogin::class, 'Logout'])->name('logout')->middleware('auth');
Route::get('/register', [RegisterController::class, 'index'])->name('register_view')->middleware('guest');
Route::post('/register', [authRegister::class, 'register'])->name('register')->middleware('guest');
Route::post('/course', [CourseController::class, 'createVocabulary'])->name('create_vocabulary')->middleware('auth');
