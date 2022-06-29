<?php

namespace App\Http\Controllers;

use App\Models\User;
use http\Env\Request;
use Illuminate\Support\Str;

class SignupController extends Controller
{
//            $this->redirect(route('hippo.check-email-page'));



    public function formulaire($message=null)
    {

        return view('val.signup', ['message'=>$message]);
    }

    public function traitement()
    {


        request()->validate([
            'email' => ['required','Email', 'max:50'],
            'password' => ['required','confirmed', 'min:8', 'max:12'],
        ]);

        $user = User::create([
            'email'=>request('email'),
            'password'=>bcrypt(request('password')),
            'password_confirmation'=>bcrypt(request('password_confirmation')),
            'token'=>Str::uuid(),
        ]);

        return view('val.signin');
    }

    public function checkEmail (){

        request()->validate([
            'email' => ['required', 'email']
        ]);
        $email = request('email');

        $user = User::where('email', $email)->first();
        if($user){
            //si active_token = 0 : check your email
            if($user->active_token) {
                $message = 'Votre compte est déjà actif';
                return redirect(route('login', ['message' => $message]));
            }else{
                $message = 'Vous devez valider votre email dans votre messagerie';
                return redirect(route('signup', ['message' => $message]));
            }

            //si active_token = 1



        }else{
            $user = User::create([
                'email'=>request('email'),
                'token'=>Str::uuid(),
                ]);

            // on envoie un email et....

            $message = 'Regardez votre messagerie';
            return redirect(route('signup', ['message' => $message]));
        }
    }
}
