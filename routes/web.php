<?php

use App\Http\Controllers\DisconnectController;
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


// *USER AUTHENTICATED* ROUTES
Route::middleware(['auth', 'auth.session'])->group(function () {

    Route::get('/myaccount', [MyaccountController::class, 'formulaire'])->name('myaccount');

    Route::get('/myqr', function () {
        return view('account.myqr');})->name('myqr');

    Route::get('/createqr', function () {
        return view('account.createqr');})->name('createqr');

    Route::get('/shop', function () {
        return view('account.shop');})->name('shop');

    Route::get('/help', function () {
        return view('account.help');})->name('help');

    Route::get('/settings', function () {
        return view('account.settings');})->name('settings');

    Route::get('/disconnect', [DisconnectController::class, 'youhavetogo'])->name('disconnect');

    Route::get('/templates', function () {
        return view('account.templates');})->name('templates');

});

// AUTH ROUTES
Route::get('/signup', [SignupController::class, 'formulaire'])->name('signup');
Route::post('/signup', [SignupController::class, 'traitement'])->name('signup-post');

Route::get('/signin', [SigninController::class, 'formulaire'])->name('signin');
Route::get('/login', [SigninController::class, 'pleaselogin'])->name('login');
Route::post('/signin', [SigninController::class, 'traitement'])->name('signin-post');

Route::get('/welcome/{token}', [WelcomeController::class, 'formulaire'])->name('welcome');
Route::post('/welcome', [WelcomeController::class, 'traitement'])->name('welcome-post');


Route::get('/public/{token}', [PublicController::class, 'showInfo']);


// HOMEPAGES ROUTES

Route::get('/', function () {
    return view('homepages.home');})->name('home');

Route::get('/services', function () {
    return view('homepages.services');})->name('services');

Route::get('/aboutus', function () {
    return view('homepages.aboutus');})->name('aboutus');

Route::get('/contact', function () {
    return view('homepages.contact');})->name('contact');











