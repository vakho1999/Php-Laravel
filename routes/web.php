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
#Homepage
Route::get('/', function () {
    return view('welcome');})->name('home')->middleware('auth');
#Authentication
Route::get('/login', [\App\Http\Controllers\LoginController::class,'login'])->name('login');
Route::post('/post-login', [\App\Http\Controllers\LoginController::class,'postlogin'])->name('post_login');
Route::get('/logout', [\App\Http\Controllers\LoginController::class,'logout'])->name('logout');


#Quiz Routes
Route::get('/form', [\App\Http\Controllers\FormController::class,'forms'])->name('form');
Route::post('/results', [\App\Http\Controllers\ResultsController::class,'results'])->name('results');
Route::post('/create_form', [\App\Http\Controllers\FormController::class,'create_form'])->name('create_form');
Route::get('/view_form_create', [\App\Http\Controllers\FormController::class,'view_create_from'])->name('view_create_from');

