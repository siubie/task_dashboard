<?php

use App\Http\Controllers\detail;
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

Route::get('/', [detail::class, 'index']);
Route::get('/news/hero-post-detail', [App\Http\Controllers\detail::class, 'show'])->name('detail');
Route::get('/news/featured/{id}', [App\Http\Controllers\detail::class, 'featured']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

