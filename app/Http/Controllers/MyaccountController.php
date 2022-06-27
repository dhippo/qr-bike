<?php

namespace App\Http\Controllers;

use App\Models\User;


class MyaccountController extends Controller
{
    public function traitement()
    {

        if(auth()->guest()) {
            return redirect('/signin')->withErrors([
                'password' => 'Vous devez vous connecté',
            ]);
        };

        if(auth()->guest()) {
            return redirect('/signin')->withErrors([
                'password' => 'Vous devez vous connecté',
            ]);
        };


        return view('val.myaccount');
    }
}
