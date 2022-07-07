<?php

use App\Http\Controllers\FirstconnexionController;
use App\Http\Controllers\HealthinfoController;
use App\Http\Controllers\MyqrcodesController;
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

Route::get('/', function (){
    return view ('welcome');
});

Route::get('/v2', function (){
    return view ('layouts.menu');
});





Route::get('/signup', [SignupController::class, 'formulaire'])->name('signup');

Route::post('/signup', [SignupController::class, 'traitement']);

Route::get('/signin', [SigninController::class, 'formulaire'])->name('signin');;

Route::post('/signin', [SigninController::class, 'traitement']);

Route::get('/myaccount', [MyaccountController::class, 'traitement']);

Route::get('/edit-healthinfo', [HealthinfoController::class, 'formulaire']);

Route::post('/edit-healthinfo', [HealthinfoController::class, 'traitement']);

Route::post('/edit-healthinfo', [HealthinfoController::class, 'traitement']);

Route::get('/public/{token}', [PublicController::class, 'showInfo']);

Route::get('/myQrCode', [MyqrcodesController::class, 'show']);

Route::get('/FirstConnexion', [FirstconnexionController::class, 'formulaire']);









