<?php

use App\Http\Controllers\BlogController;
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
Route::get('/', [BlogController::class, 'index']);
Route::get('/news/hero-post-detail', [BlogController::class, 'detail']);
Route::get('/news/featured/{id}', [BlogController::class, 'feature']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
