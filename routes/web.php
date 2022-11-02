<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth\RegisterController;

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

Auth::routes(['register' => false]);

Route::view('/', 'master')->name('login');
Route::view('/login', 'master')->name('login');

