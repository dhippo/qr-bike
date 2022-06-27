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

        if(is_null(auth()->user()->blood)){
            return redirect('/edit-healthinfo');
        };


        return view('val.myaccount');
    }
}
