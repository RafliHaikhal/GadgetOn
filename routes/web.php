<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [WebController::class, 'home'])->name('index');
Route::get('/mycart' ,[WebController::class, 'mycart']);
Route::get('/viewproduct', [WebController::class, 'viewpro']);
Route::get('/auth/register', [UserController::class, 'index_register'])->name('index_register');
Route::get('/auth/login', [LoginController::class, 'index_login'])->name('index_login');
Route::get('/profile', [UserController::class, 'show'])->name('show_profile');

Route::post('/auth/register', [UserController::class, 'register'])->name('register');
Route::post('/auth/login', [LoginController::class, 'login'])->name('login');

