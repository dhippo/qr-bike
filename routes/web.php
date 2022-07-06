<?php

use App\Http\Controllers\HealthinfoController;
use App\Http\Controllers\WelcomeController;
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

// Authenticate routes
Route::middleware(['auth', 'auth.session'])->group(function () {

    Route::get('/myaccount', [MyaccountController::class, 'formulaire'])->name('myaccount');

    Route::post('/myaccount', [MyaccountController::class, 'traitement'])->name('myaccount-post');

});




// Free routes
Route::get('/tmp', function () {
    return view('steph.tmp');
});

Route::get('/signup', [SignupController::class, 'formulaire'])->name('signup');

Route::post('/signup', [SignupController::class, 'traitement'])->name('signup-post');

Route::get('/signin', [SigninController::class, 'formulaire'])->name('signin');

Route::post('/signin', [SigninController::class, 'traitement'])->name('signin-post');


Route::get('/edit-healthinfo', [HealthinfoController::class, 'formulaire']);

Route::post('/edit-healthinfo', [HealthinfoController::class, 'traitement']);

Route::post('/edit-healthinfo', [HealthinfoController::class, 'traitement']);

Route::get('/public/{token}', [PublicController::class, 'showInfo']);

Route::get('/testo', function () {
    return view('val.testotest');
});

Route::get('/welcome/{token}', [WelcomeController::class, 'formulaire'])->name('welcome');

Route::post('/welcome', [WelcomeController::class, 'traitement'])->name('welcome-post');



