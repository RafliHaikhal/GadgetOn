<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
<<<<<<< HEAD
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
=======
use App\Http\Controllers\AuthController;
>>>>>>> 791b5daaa1b7cc0866b6b524d35776b1a3ad48c2

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

<<<<<<< HEAD
Route::get('/', [WebController::class, 'home'])->name('index');
Route::get('/mycart' ,[WebController::class, 'mycart']);
Route::get('/viewproduct', [WebController::class, 'viewpro']);
Route::get('/auth/register', [UserController::class, 'index_register'])->name('index_register');
Route::get('/auth/login', [LoginController::class, 'index_login'])->name('index_login');
Route::get('/profile', [UserController::class, 'show'])->name('show_profile');

Route::post('/auth/register', [UserController::class, 'register'])->name('register');
Route::post('/auth/login', [LoginController::class, 'login'])->name('login');
=======
Route::get('/', [WebController::class, 'home']);
Route::get('/login', [WebController::class, 'create']);
Route::post('/login', [WebController::class, 'store']);
Route::get('/home', [WebController::class, 'home']);

Route::get('/login', [WebController::class, 'login']);
Route::get('/register', [WebController::class, 'register']);
Route::get('/', [WebController::class, 'home']);
Route::get('/mycart' ,[WebController::class, 'mycart']);
Route::get('/viewproduct', [WebController::class, 'viewpro']);
Route::get('/editproduct', [WebController::class, 'editpro']);
Route::get('/editproductqty', [WebController::class, 'editproqty']);
Route::get('/transactionhistory', [WebController::class, 'transactionhistory']);
Route::get('/addproduct', [WebController::class, 'addproduct']);
>>>>>>> 791b5daaa1b7cc0866b6b524d35776b1a3ad48c2

