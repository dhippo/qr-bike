<?php

use App\Http\Controllers\HealthinfoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\MyaccountController;
use App\Http\Controllers\InfosController;

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

//steph
Route::get('/test', [InfosController::class, 'db']);


Route::post('/test', [InfosController::class, 'db+']);


Route::get('/test', function () {  //route pour tester 'formulaire'
    return view('welcome');
});
//endsteph

Route::get('/signup', [SignupController::class, 'formulaire']);

Route::post('/signup', [SignupController::class, 'traitement']);

Route::get('/signin', [SigninController::class, 'formulaire']);

Route::post('/signin', [SigninController::class, 'traitement']);

Route::get('/myaccount', [MyaccountController::class, 'traitement']);

Route::get('/edit-healthinfo', [HealthinfoController::class, 'formulaire']);

Route::post('/edit-healthinfo', [HealthinfoController::class, 'traitement']);

Route::post('/edit-healthinfo', [HealthinfoController::class, 'traitement']);

Route::get('/public/{token}', [PublicController::class, 'showInfo']);







