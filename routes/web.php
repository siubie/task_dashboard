<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\FeaturedController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//main area

Route::get('/', [WelcomeController::class, 'welcome']);

Route::get('/news/hero-post-detail', [DetailController::class, 'detail']);

Route::get('/news/featured/{id}', [FeaturedController::class, 'feature']);

//main area

//cek php
Route::get('/test', function () {
    phpinfo();
});

//Route untuk login/register
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
