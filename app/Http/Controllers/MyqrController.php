<?php

namespace App\Http\Controllers;

use App\Models\Qrcode;
use App\Models\User;
use Illuminate\Http\Request;

class MyqrController extends Controller
{
    public function emptyqr()
    {
        $id = auth()->user()->id;
        $exist = 0;
        $QRexist = Qrcode::where('user_id', $id)->first();

        if ($QRexist) {
            $exist = 1;
        }

        return view('account.myqr', [
            'exist' => $exist,
        ]);
    }

}
