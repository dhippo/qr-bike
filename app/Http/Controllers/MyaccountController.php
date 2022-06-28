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

        $qrcode = QrCode::size(200)->generate("http://127.0.0.1/public/$token");

        return view("val.myaccount", compact('qrcode'));

    }
}
