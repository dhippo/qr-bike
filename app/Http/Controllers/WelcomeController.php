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
            'password'                  => 'required|confirmed',
            'password_confirmation'     => 'required',
            'fullname'  => 'required',
        ]);

        $user = User::where('token', $request->input('token'))->first();
        if($user) {
            $user->active_token = true;
            $user->fullname = $request->input('fullname');
            $user->password = bcrypt($request->input('password'));
            $user->save();

            Auth::login($user);
            return redirect(route('myaccount'));


        }else{
            return redirect(route('signup'))->withErrors([
                'email' => 'Please enter a valid email !',
            ]);
        }




        return redirect('/myaccount');
    }

}
