<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DisconnectController extends Controller
{
    public function disconnect(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/', [
            'error' => "You've been disconnected successfully"
        ]);

    }
}
