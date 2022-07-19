<?php

namespace App\Http\Controllers;

use App\Models\User;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class MyaccountController extends Controller
{
    public function formulaire()
    {
        // todo 'blinder la vue et faire passer des données dans le mail'

        return redirect(route('myaccount'));

    }

    public function traitement()
    {

        if(auth()->guest()) {
            return redirect(route('signin'))->withErrors([
                'password' => 'You must be logged in',
            ]);
        };

        if(is_null(auth()->user()->active_token)){
            return redirect(route('signin'))->withErrors([
                'password' => 'You must check your inbox to activate your account ',
            ]);
        };
        if(is_null(auth()->user()->password)){
            return redirect(route('welcome'))->withErrors([
                'password' => 'You must create a password to continue ',
            ]);
        };

        $token = auth()->user()->token;
        $email = auth()->user()->email;
        $lastname = auth()->user()->lastname;
        $firstname = auth()->user()->firstname;
        $age = auth()->user()->age;
        $sex = auth()->user()->sex;
        $infos = auth()->user()->infos;
        $phone = auth()->user()->phone;
        $photo = auth()->user()->photo;


        $qrcode = QrCode::size(200)->generate("http://127.0.0.1/public/$token");

        return view("auth.myaccount", compact('qrcode'), [
            'email' => $email,
            'lastname' => $lastname,
            'firstname' => $firstname,
            'age' => $age,
            'photo' => $photo,
            'sex' => $sex,
            'infos' => $infos,
            'phone' => $phone,

        ]);

    }
}
