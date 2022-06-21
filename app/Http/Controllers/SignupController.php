<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;

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
            'name' => ['required','max:20'],
        ]);

        $utilisateur = Utilisateur::create([
            'email'=>request('email'),
            'password'=>bcrypt(request('password')),
            'password_confirmation'=>bcrypt(request('password_confirmation')),
            'name'=>request('name'),
        ]);

        return view('val.signin');
    }
}
