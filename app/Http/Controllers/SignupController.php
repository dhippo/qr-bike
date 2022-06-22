<?php

namespace App\Http\Controllers;

use App\Models\User;

class SignupController extends Controller
{
    public function formulaire()
    {
        return view('val.signup');
    }

    public function traitement()
    {
        request()->validate([
            'email' => ['required','Email', 'max:50'],
            'password' => ['required','confirmed', 'min:8', 'max:12'],

        ]);

        $user = User::create([
            'email'=>request('email'),
            'password'=>bcrypt(request('password')),
            'password_confirmation'=>bcrypt(request('password_confirmation')),

        ]);

        return view('val.signin');
    }
}
