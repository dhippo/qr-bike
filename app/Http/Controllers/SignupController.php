<?php

namespace App\Http\Controllers;

use App\Models\User;
use http\Env\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
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

    /**
     * Check with if email is valid (magic URL)
     *
     * @return Application|RedirectResponse|Redirector
     */
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

        }else{
            $user = User::create([
                'email'=>request('email'),
                'password'=>request('password'),
                'password_confirmation'=>request('password_confirmation'),
                'token'=>Str::uuid(),
                ]);


            $message = 'Regardez votre messagerie';
            return redirect(route('signup', ['message' => $message]));
        }
    }
}
