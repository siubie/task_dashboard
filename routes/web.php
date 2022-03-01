<?php

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
#Mengontrol route via controller
Route::get('/', [DetailController::class, 'index']);
Route::get('/news/hero-post-detail', [App\Http\Controllers\DetailController::class, 'show']);
Route::get('/news/featured/{id}', [App\Http\Controllers\DetailController::class, 'featured']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
