<?php

use App\Http\Controllers\HeroController;
use App\Http\Controllers\HeroDetailController;
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

Route::get('/', [HeroController::class, 'index']);
Route::get('/news/hero-post-detail', [HeroDetailController::class, 'detail']);
Route::get('/news/featured/{id}', [HeroDetailController::class, 'featured']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
