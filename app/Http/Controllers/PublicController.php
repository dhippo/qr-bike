<?php

namespace App\Http\Controllers;

use App\Models\User;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PublicController extends Controller
{
    public function showInfo($token)
    {
        $user = User::where('token', $token)->first();


        return view("public", [
            'token' => $token,
            'user' => $user,
        ]);

    }
}
