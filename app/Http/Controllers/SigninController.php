<?php

namespace App\Http\Controllers;

use App\Models\User;


class SigninController extends Controller
{
    public function formulaire()
    {
        $message = '';
        $collection = collect(['firefighter.jpg','bike3.jpg','bikebg1.jpg','military.jpg','emergency.jpg','car.jpg']);
        $randomImg = $collection->random();
        return view('val.signin', [
            'randomImg' => $randomImg,
            'message' => $message,
        ]);
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
            return redirect('/myaccount');
        }

        return back()->withInput()->withErrors([
            'password' => 'Votre email ou mot de passe est incorrect'
        ]);

    }

};
