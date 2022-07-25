<?php

namespace App\Http\Controllers;

use App\Mail\ActivateAccount;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class SignupController extends Controller
{
    public function formulaire()
    {
//        $collection = collect(['firefighter.jpg','bike3.jpg','bikebg1.jpg','military.jpg','emergency.jpg','car.jpg']);
//        $randomImg = $collection->random();

        return view('auth.signup');
    }

    public function traitement()
    {
        request()->validate([
            'email' => ['required','Email', 'max:50'],
        ]);
        $email = request('email');

        $userExist = User::where('email', $email)->first();
        if($userExist) {

            return redirect(route('signin'))->withErrors([
                'checkInBox' => 'Your account already exists !',
            ]);
        }

        else{ // CREATION NEW USER WITHOUT PASSWORD
            $uniqueToken = Str::uuid();
            $user = User::create([
                'email' => $email,
                'token' => $uniqueToken,
                'infos' => [
                    'key' => 'value'
                ]
            ]);

            if(app()->environment('local')){
                $destination = config('mail.destination_local');
            }else{
                $destination = $email;
            }
            Mail::to("jacinto.valentino27@gmail.com")->send(new ActivateAccount($user));

            return redirect(route('signup'))->withErrors([
                'checkInBox' => 'Check your mailbox to activate your account',
            ]);
        }



    }
}
