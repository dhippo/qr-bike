<?php

namespace App\Http\Controllers;

use App\Models\User;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


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
        $phone = auth()->user()->phone;
        $sex = auth()->user()->sex;
        $photo = auth()->user()->photo;
        $nameDoctor = auth()->user()->nameDoctor;
        $phoneDoctor = auth()->user()->phoneDoctor;
        $country = auth()->user()->country;
        $city = auth()->user()->city;
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
            'nameDoctor' => $nameDoctor,
            'phoneDoctor' => $phoneDoctor,
            'sex' => $sex,
            'phone' => $phone,
            'country' => $country,
            'city' => $city,
            'other' => $other,
        ]);

    }
}
