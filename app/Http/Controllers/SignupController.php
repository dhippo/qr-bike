<?php

namespace App\Http\Controllers;

use App\Mail\CheckEmail;
use App\Models\User;
use http\Env\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Mail;
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
            'password' => ['required','confirmed'],
        ]);

        $email = request('email');

        $user = User::where('email', $email)->first();
        if($user){
            //si active_token = 0 : check your email
            if($user->active_token) {
                $message = 'Votre compte est déjà actif';
                return redirect(route('signin', ['message' => $message]));
            }else{
                $message = 'Vous devez valider votre email dans votre messagerie';
                return redirect(route('signup', ['message' => $message]));
            }

        }else{
            $user = User::create([
                'email'=>request('email'),
                'password'=>request('password'),
                'password_confirmation'=>request('password_confirmation'),
                'token'=>Str::uuid(),
            ]);


            $message = 'Regardez votre messagerie';
            Mail::to('durandhippolyte@gmail.com')->send(new CheckEmail());

            return redirect(route('signin', ['message' => $message]));
        }
    }
}
