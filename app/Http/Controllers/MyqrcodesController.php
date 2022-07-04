<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyqrcodesController extends Controller
{
    public function show()
    {
        return view('val.my-qrcodes');
    }
}
