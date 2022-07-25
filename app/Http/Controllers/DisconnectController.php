<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DisconnectController extends Controller
{
    public function youhavetogo ()
    {
        Auth::logout();
    return redirect(route('login'));
    }
}
