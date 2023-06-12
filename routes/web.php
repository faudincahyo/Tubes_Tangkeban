<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'welcome']);


Route::get('/', [App\Http\Controllers\LoginController::class, 'login'])->name('login');


Route::get('auth/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('google.login');
Auth::routes();
Route::get('/auth/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'googleCallback']);

//Halaman Depan
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/navbar', [App\Http\Controllers\HomeController::class, 'navbar']);
Route::get('/tiket', [App\Http\Controllers\PageController::class, 'tiket'])->name(('tiket'));
Route::get('/tentang', [App\Http\Controllers\PageController::class, 'tentang'])->name(('tentang'));

//Tiket
Route::get('/pesan', [App\Http\Controllers\PesanController::class, 'index'])->name('pesan');
