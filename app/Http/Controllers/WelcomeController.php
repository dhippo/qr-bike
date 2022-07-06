<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function formulaire()
    {
        return view('auth.welcome');
    }



    public function traitement() {

        auth()->user()->update([
            'active_token'=>1,
        ]);

        if(auth()->guest()) {
            return redirect('/signin')->withErrors([
                'password' => 'You must login to access this page',
            ]);
        };

        request()->validate([
            'password' => ['required', 'max:25', 'alpha'],
        ]);

        auth()->user()->update([
            'fullname'=>request('fullname'),
            'password'=> request('password')
                //request('lastname'),
        ]);

        return redirect('/myaccount');
    }

    private function bycrpt(string $string)
    {
    }
}
