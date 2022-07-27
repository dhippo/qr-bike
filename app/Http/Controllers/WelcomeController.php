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


    public function traitement($token) {
        request()->validate([
            'password' => 'min:6',
            'password_confirmation' => 'required|same:password|min:6'
        ]);
        $email = request('email');

        $user = User::where('token', $token)->first();

        if($user) {
            $active_token = true;
            $password = bcrypt(request('password'));

            if(request('firstname')){$firstname = request('firstname');}
            if(request('lastname')){$lastname = request('lastname');}

            $user->save();

            Auth::attempt([
                'email' => $email,
                'password' => $password,
                'active_token' => $active_token,
            ]);
            return view('homepages.home');
            return redirect(route('myaccount'));


        }else{
            return view('homepages.aboutus');
            return redirect(route('signin'));
        }
    }

}
