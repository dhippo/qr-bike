<?php

use App\Http\Controllers\HealthinfoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SigninController;
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



Route::get('/signup', [SignupController::class, 'formulaire']);

Route::post('/signup', [SignupController::class, 'traitement']);

Route::get('/signin', [SigninController::class, 'formulaire']);

Route::post('/signin', [SigninController::class, 'traitement']);

Route::get('/myaccount', [MyaccountController::class, 'traitement']);

//Route::view('/', 'welcome');
Route::get('/', 'App\Http\Controllers\ContactMailController');
//use App\Http\Requests\ContactRequest;
//use App\Http\Controllers\ContactMailController;

Route::get('/edit-healthinfo', [HealthinfoController::class, 'formulaire']);

Route::post('/edit-healthinfo', [HealthinfoController::class, 'traitement']);

Route::view('/firstemail', 'firstemail');

Route::get("send-email", [EmailController::class, "sendEmail"]);



Route::middleware(['guest'])->group(function(){

    Route::get('/', [ContactMailController::class, 'index'])->name('contact');

    Route::post('/contact', [ContactMailController::class, 'contactSendMail'])->name('contact.send');

});



