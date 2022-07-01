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



Route::get('/signup', [SignupController::class, 'formulaire'])->name('signup');

Route::post('/signup', [SignupController::class, 'traitement']);

Route::get('/signin', [SigninController::class, 'formulaire'])->name('signin');;

Route::post('/signin', [SigninController::class, 'traitement']);

Route::get('/myaccount', [MyaccountController::class, 'traitement']);

Route::get('/edit-healthinfo', [HealthinfoController::class, 'formulaire']);

Route::post('/edit-healthinfo', [HealthinfoController::class, 'traitement']);

Route::post('/edit-healthinfo', [HealthinfoController::class, 'traitement']);

Route::get('/public/{token}', [PublicController::class, 'showInfo']);


Route::get('/suscribe', [SignupController::class, 'formulaire'])->name('suscribe');

Route::post('/suscribe', [SignupController::class, 'traitement']);

Route::get('/login', [SigninController::class, 'formulaire'])->name('login');;

Route::post('/login', [SigninController::class, 'traitement']);







