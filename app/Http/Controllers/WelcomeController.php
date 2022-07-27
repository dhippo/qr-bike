<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function formulaire($token)
    {
        $userExist = User::where('token', $token)->first();
        if($userExist) {
            return view('auth.welcome', ['token'=>$token]);
        }else{
            return redirect(route('signin'))->withErrors([
                'email' => 'You must check your inbox !',
            ]);
        }
    }


    public function traitement(Request $request) {
        $validated = $request->validate([
            'password' => 'min:6|required_with:password-confirmation|same:password-confirmation',
            'password-confirmation' => 'min:6'
        ]);

        $user = User::where('token', $request->input('token'))->first();
        if($user) {
            $user->active_token = true;
            $user->password = bcrypt($request->input('password'));

            if($request->input('firstname')){$user->firstname = $request->input('firstname');}
            if($request->input('lastname')){$user->lastname = $request->input('lastname');}

            $user->save();

            Auth::attempt([
                'email' => $user->email,
                'password' => $request->input('password')
            ]);
            return redirect(route('myaccount'));


        }else{
            return redirect(route('signin'))->withErrors([
                'email' => 'check your inbox !',
            ]);
        }
    }

}
