<?php

use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::resource('/', ApartmentController::class);
Route::get('/cart/add/{id}',[MainController::class,'add']);
Route::get('/cart/show',[MainController::class,'show']);
Route::post('/cart/update',[MainController::class,'update']);
Route::get('/cart/delete/{id}',[MainController::class,'delete']);
Route::get('/cart/reset',[MainController::class,'reset']);

