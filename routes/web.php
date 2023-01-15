<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;


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

// Main Page
Route::get('/', [WebController::class, 'index'])->name('index');

// Register Page
Route::get('/auth/register', [UserController::class, 'index_register'])->name('index_register');
Route::post('/auth/register', [UserController::class, 'register'])->name('register');

// Login Page
Route::get('/auth/login', [LoginController::class, 'index_login'])->name('index_login');
Route::post('/auth/login', [LoginController::class, 'login'])->name('login');
Route::post('/auth/logout', [LoginController::class, 'logout'])->name('logout');

// Profile Page
Route::get('/profile', [UserController::class, 'show'])->name('show_profile');
Route::get('/profile/edit', [UserController::class, 'edit_page'])->name('edit_profile');
Route::post('/profile/edit', [UserController::class, 'update_profile'])->name('update_profile');

// Product
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product_detail');

Route::get('/mycart' ,[WebController::class, 'mycart']);
Route::get('/viewproduct', [WebController::class, 'viewpro']);
Route::get('/mycart' ,[WebController::class, 'mycart']);
Route::get('/editproduct', [WebController::class, 'editpro']);
Route::get('/editproductqty', [WebController::class, 'editproqty']);
Route::get('/transactionhistory', [WebController::class, 'transactionhistory']);
Route::get('/addproduct', [WebController::class, 'addproduct']);

