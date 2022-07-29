<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Qrcode;

class PublicController extends Controller
{
    public function showInfo($token)
    {
        $qrcode = Qrcode::where('token', $token)->first();

        $infos = json_decode($qrcode->infos, true);


        if($qrcode){
            return view("public", [
                'token' => $token,
                'infos' => json_decode($qrcode->infos, true),
            ]);
        }else{
            abort(404);
        }


    }
}
