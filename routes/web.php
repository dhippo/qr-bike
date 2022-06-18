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
    return view('welcome');
});

Route::get('/signup', function () {
    return view('val.signup');
});

Route::post('/signup', function () {

    request()->validate([
        'email' => ['required','Email', 'max:50'],
        'password' => ['required','confirmed', 'min:8', 'max:12'],
        'name' => ['required','max:20'],
    ]);

    $utilisateur = \App\Models\Utilisateur::create([
        'email'=>request('email'),
        'password'=>request('password'),
        'password_confirmation'=>request('password_confirmation'),
        'name'=>request('name'),
    ]);

    return view('val.signin');

});

Route::post('/signup', function () {

    return view('val.home');

});

Route::get('/signin', function () {
    return view('val.signin');
});


Route::get('/hello', function () {
    return view('hello');
});
