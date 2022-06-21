<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\MyaccountController;
use App\Http\Controllers\HealthinfoController1;

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



Route::get('/signup', [SignupController::class, 'formulaire']);

Route::post('/signup', [SignupController::class, 'traitement']);

Route::get('/signin', [SigninController::class, 'formulaire']);

Route::post('/signin', [SigninController::class, 'traitement']);

Route::get('/myaccount', [MyaccountController::class, 'traitement']);

Route::view('/', 'welcome');

Route::get('/edit-healthinfo', [HealthinfoController1::class, 'formulaire']);

Route::post('/edit-healthinfo', [HealthinfoController1::class, 'traitement']);



