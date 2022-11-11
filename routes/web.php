<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::view('/','welcome')->name('welcome')->middleware('guest');
Route::post('/sign-in',[UserController::class,'UserLogin']);

Route::view('/home','dashboard')->name('home')->middleware('auth');
Route::get('/log-out',[UserController::class,'UserLogout']);

Route::get('/users',[UserController::class,'viewUsers'])->name('users');