<?php

namespace App\Http\Controllers;

use App\Mail\CheckEmail;
use App\Models\User;
use http\Env\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Str;

class SignupController extends Controller
{


    public function formulaire()
    {
        $collection = collect(['firefighter.jpg','bike3.jpg','bikebg1.jpg','military.jpg','emergency.jpg','car.jpg']);
        $randomImg = $collection->random();

        return view('val.signup', [
            'randomImg' => $randomImg,

        ]);
    }


    /**
     * Check with if email is valid (magic URL)
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function traitement (){

        request()->validate([
            'email' => ['required', 'email'],
        ]);


        $email = request('email');

        $user = User::where('email', $email)->first();
        // $user variable take the value of the first user find on db

        if($user){ // THE EMAIL EXISTS
            if($user->active_token) {
                $message = 'You already have an account';
                return redirect(route('login', ['message' => $message]));
            }else{
                $message = 'Check your inbox and validate your account';
                return redirect()->route('signup')->with('message', $message);
            }

        }else{ // CREATE AN ACCOUNT BECAUSE EMAIL NOT FOUND ON DB
            $tmptoken = Str::uuid();
            $user = User::create([
                'email'=>request('email'),
                'token'=> $tmptoken,
                'password'=>$tmptoken,
                'infos'=> [
                    'key'=>'value',
                ],
            ]);

            Mail::to('durandhippolyte@gmail.com')->send(new CheckEmail());

            return redirect(route('signup'));
        }
    }
}
