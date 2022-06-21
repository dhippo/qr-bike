<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use App\Models\infosante;

class MyaccountController extends Controller
{
    public function traitement()
    {

        if(auth()->guest()) {
            return redirect('/signin')->withErrors([
                'password' => 'Vous devez vous connecté',
            ]);
        };


        return view('val.myaccount');
    }
}
