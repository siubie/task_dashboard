<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RootController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\FeaturedController;



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

// root
Route::get('/',[RootController::class,'index']);
// news
Route::get('/news/hero-post-detail',[DetailController::class,'detailPage']);
Route::get('/news/featured/{id}',[FeaturedController::class,'featured']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
