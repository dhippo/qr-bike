<?php

use App\Http\Controllers\HealthinfoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\MyaccountController;


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

Route::get('/bouton', function () {
    return view('testBouton');
});


Route::get('/signup', [SignupController::class, 'formulaire']);

Route::post('/signup', [SignupController::class, 'traitement']);

Route::get('/signin', [SigninController::class, 'formulaire']);

Route::post('/signin', [SigninController::class, 'traitement']);

Route::get('/myaccount', [MyaccountController::class, 'traitement']);

Route::get('/edit-healthinfo', [HealthinfoController::class, 'formulaire']);

Route::post('/edit-healthinfo', [HealthinfoController::class, 'traitement']);

Route::post('/edit-healthinfo', [HealthinfoController::class, 'traitement']);

Route::get('/public/{token}', [PublicController::class, 'showInfo']);






