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
Route::get('/', function () {
    return view('layouts.home');
});

Route::get('/a', function () {
    return view('tmp');
});

Route::get('/welcome', function () {
    return view('LaravelWelcome');
});

Route::get('/wel', function () {
    return view('master');
});

Route::get('/login', [\App\Http\Controllers\RegisterController::class,'index']);
Route::post('/login', [\App\Http\Controllers\RegisterController::class,'store'])->name('register');



Route::get('/about', function () {
    return view('informationAbout');
});
