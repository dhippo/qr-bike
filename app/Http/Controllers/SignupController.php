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
        $collection = collect(['firefighter.jpg','bike3.jpg','bikebg1.jpg','military.jpg','emergency.jpg','car.jpg']);
        $randomImg = $collection->random();
        return view('val.signup', [
            'randomImg' => $randomImg,
        ]);
    }

    public function traitement()
    {
        request()->validate([
            'email' => ['required','Email', 'max:50'],
        ]);
        $email = request('email');



        $userExist = User::where('email', $email)->first();
        if($userExist) {

            // @todo "Renvoyer un message d'erreur"
            $messageMailExist = 'message d erreur';

            return view('val.signin', [
                'message' => $messageMailExist,
                'randomImg' => 'firefighter.jpg',
            ]);
        }
        else{ // CREATION NEW USER WITHOUT PASSWORD
            $uniquetoken = Str::uuid();
            $user = User::create([
                'email'=>$email,
                'token'=>$uniquetoken,
                'infos'=> [
                    'key' => 'value'
                ]
            ]);
            $collection = collect(['firefighter.jpg','bike3.jpg','bikebg1.jpg','military.jpg','emergency.jpg','car.jpg']);
            $randomImg = $collection->random();

            Mail::to('durandhippolyte@gmail.com')->send(new ActivateAccount());

            // @todo "Renvoyer un message pour check inbox"
            $messageCheckInbox = 'check your inbox';

            return view('val.signin', [
                'message' => $messageCheckInbox,
                'randomImg' => 'firefighter.jpg',
            ])->withErrors([
                'password' => 'Check your mailbox to activate your account',
            ]);
        }



    }
}
