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

// *USER AUTHENTICATED* routes
Route::middleware(['auth', 'auth.session'])->group(function () {

    Route::get('/myaccount', [MyaccountController::class, 'formulaire'])->name('myaccount');

    Route::post('/myaccount', [MyaccountController::class, 'traitement'])->name('myaccount-post');

});

// AUTH ROUTES
Route::get('/signup', [SignupController::class, 'formulaire'])->name('signup');
Route::post('/signup', [SignupController::class, 'traitement'])->name('signup-post');

Route::get('/signin', [SigninController::class, 'formulaire'])->name('signin');
Route::post('/signin', [SigninController::class, 'traitement'])->name('signin-post');

Route::get('/welcome/{token}', [WelcomeController::class, 'formulaire'])->name('welcome');
Route::post('/welcome', [WelcomeController::class, 'traitement'])->name('welcome-post');



// Account routes
Route::get('/edit-healthinfo', [HealthinfoController::class, 'formulaire']);
Route::post('/edit-healthinfo', [HealthinfoController::class, 'traitement']);

Route::get('/public/{token}', [PublicController::class, 'showInfo']);


// homepages view's routes

Route::get('/', function () {
    return view('homepages.home');
})->name('home');

Route::get('/home', function () {
    return view('homepages.home');
})->name('home-2');

Route::get('/services', function () {
    return view('homepages.services');
})->name('services');

Route::get('/aboutus', function () {
    return view('homepages.aboutus');
})->name('aboutus');

// app routes

Route::get('/app/', function () {
    return view('account.myaccounttmp');})->name('myaccounttmp');

Route::get('/app/myqr', function () {
    return view('account.myqr');})->name('myqr');

Route::get('/app/our_shop', function () {
    return view('account.our_shop');})->name('our_shop');

Route::get('/app/templates', function () {
    return view('account.templates');})->name('templates');





// TESTS

Route::get('/testo', function () {
    return view('val.testotest');
});
Route::get('/t', function () {
    return view('test-view');
});




