<?php

namespace App\Http\Controllers;

use App\Models\User;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class MyaccountController extends Controller
{
    public function formulaire()
    {
        // todo 'blinder la vue et faire passer des données dans le mail'

        return view('account.myaccounttmp');

    }

    public function traitement()
    {

        if(auth()->guest()) {
            return redirect('/val/signin')->withErrors([
                'password' => 'You must be logged in',
            ]);
        };

        if(is_null(auth()->user()->active_token)){
            return redirect('/val/signnin')->withErrors([
                'password' => 'You must check your inbox to activate your account ',
            ]);
        };
        if(is_null(auth()->user()->password)){
            return redirect('/welcome')->withErrors([
                'password' => 'You must create a password to continue ',
            ]);
        };

        $token = auth()->user()->token;
        $email = auth()->user()->email;
        $lastname = auth()->user()->lastname;
        $firstname = auth()->user()->firstname;
        $age = auth()->user()->age;
        $blood = auth()->user()->blood;
        $phoneContact = auth()->user()->phoneContact;
        $nameContact = auth()->user()->nameContact;
        $weight = auth()->user()->weight;
        $size = auth()->user()->size;
        $photo = auth()->user()->photo;
        $doctor = auth()->user()->doctor;
        $other = auth()->user()->other;

        $qrcode = QrCode::size(200)->generate("http://127.0.0.1/public/$token");

        return view("val.myaccount", compact('qrcode'), [
            'email' => $email,
            'lastname' => $lastname,
            'firstname' => $firstname,
            'age' => $age,
            'blood' => $blood,
            'phoneContact' => $phoneContact,
            'nameContact' => $nameContact,
            'weight' => $weight,
            'size' => $size,
            'photo' => $photo,
            'doctor' => $doctor,
            'other' => $other,
        ]);

    }
}
