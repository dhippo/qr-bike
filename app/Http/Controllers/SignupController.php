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

        $collection = collect(['firefighter.jpg','bike3.jpg','bikebg1.jpg','military.jpg','emergency.jpg','car.jpg']);
        $randomImg = $collection->random();


        $email = request('email');

        $user = User::where('email', $email)->first();
        if($user){
            if($user->active_token) {
                $message = 'You already have an account';
                return view('val.signin', [
                    'message' => $message,
                    'randomImg' => $randomImg,
                ]);
            }else{
                $message = 'Check your inbox and validate your account';

                return view('val.signin', [
                    'message' => $message,
                    'randomImg' => $randomImg,
                ]);

 //
            }

        }else{
            $user = User::create([
                'email'=>request('email'),
                'token'=>Str::uuid(),
            ]);

            Mail::to('durandhippolyte@gmail.com')->send(new CheckEmail());
            $message = 'Check your inbox and validate your account';

            return view('val.signin', [
                'message' => $message,
                'randomImg' => $randomImg,
            ]);
        }
    }
}
