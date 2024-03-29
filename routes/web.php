<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderListController;
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



Route::match(['get','post'],'/', [OrderListController::class, 'orderList'])->name('orders')->middleware('auth');
Route::match(['get','post'],'/login/reg/', [UserController::class, 'registration'])->name('registration');
Route::match(['get','post'],'/login/recovery/', [UserController::class, 'recovery']);
Route::match(['get','post'],'/login/auth/', [UserController::class, 'login'])->name('login');



