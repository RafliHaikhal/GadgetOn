<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AuthController;

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

