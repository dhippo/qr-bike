<?php

namespace App\Http\Controllers;

use App\Models\User;


class SigninController extends Controller
{
    public function formulaire()
    {
        return view('auth.signin');
    }

    public function pleaselogin()
    {
        return view('auth.signin');
    }

    public function traitement()
    {
        request()->validate([
            'email' => ['required','Email', 'max:50'],
            'password' => ['required', 'min:8', 'max:12'],
        ]);

        $res = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        if($res) {
            return redirect(route('myaccount'));
        }

        return back()->withInput()->withErrors([
            'password' => 'Votre email ou mot de passe est incorrect'
        ]);

    }

};
