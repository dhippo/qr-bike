<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            //'password' => ['required','confirmed', 'min:8', 'max:12'],
        ]);

        $uniquetoken = Str::uuid();
        $user = User::create([
            'email'=>request('email'),
            //'password'=>bcrypt($uniquetoken),
            'token'=>$uniquetoken,
            'infos'=> [
                'key' => 'value'
            ]
        ]);

        $collection = collect(['firefighter.jpg','bike3.jpg','bikebg1.jpg','military.jpg','emergency.jpg','car.jpg']);
        $randomImg = $collection->random();
        return view('val.signin', [
            'randomImg' => $randomImg,
        ]);

    }
}
