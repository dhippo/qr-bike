<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function formulaire()
    {
       // todo 'blinder la vue et faire passer des données dans le mail'

        return view('auth.welcome');
    }



    public function traitement() {

        auth()->user()->update([
            'active_token'=>1,
        ]);

//        if(auth()->guest()) {
//            return redirect('/signin')->withErrors([
//                'password' => 'You must login to access this page',
//            ]);
//        };



        auth()->user()->update([
            'fullname'=>request('fullname'),
            'password'=> request('password')
                //request('lastname'),
        ]);

        if(is_null(auth()->user()->password)){
            return redirect('/welcome')->withErrors([
                'password' => 'You must create a password to continue ',
            ]);
        };


        return view('val.myaccount');
    }

    private function bycrpt(string $string)
    {
    }
}
