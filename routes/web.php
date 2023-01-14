<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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


Route::get('/login', [WebController::class, 'login']);
Route::get('/register', [WebController::class, 'register']);
Route::get('/', [WebController::class, 'home']);
Route::get('/mycart' ,[WebController::class, 'mycart']);
Route::get('/viewproduct', [WebController::class, 'viewpro']);

