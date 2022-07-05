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



        if(auth()->guest()) {
            return redirect('/signin')->withErrors([
                'password' => 'Vous devez vous connecter',
            ]);
        };

        request()->validate([
            'password' => ['required', 'max:25', 'alpha'],
        ]);

        auth()->user()->update([
            'firstname'=>request('firstname'),
            'lastname'=>request('lastname'),
            'age'=>request('age'),
            'nameContact'=>request('nameContact'),
            'phoneContact'=>request('phoneContact'),
            'blood'=>request('blood'),
            'size'=>request('size'),
            'weight'=>request('weight'),
            'doctor'=>request('doctor'),
            'other'=>request('other'),
            'photo'=>request('photo'),
        ]);

        return redirect('/myaccount');
    }
}
