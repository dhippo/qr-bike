<?php

namespace App\Http\Controllers;

use App\Models\User;

class HealthinfoController extends Controller
{
    public function formulaire()
    {
        return view('val.edit-healthinfo');
    }

    public function traitement() {



        if(auth()->guest()) {
            return redirect('/signin')->withErrors([
                'password' => 'Vous devez vous connecter',
            ]);
        };

        request()->validate([
            'firstname' => ['required', 'max:50', 'alpha'],
            'lastname' => ['required', 'max:50', 'alpha'],
            'age' => ['required','max:3', 'alpha_num'],
            'nameContact' => ['required','max:50', 'alpha'],
            'phoneContact' => ['required','max:10', 'alpha_num'],
            'blood' => ['required','max:5'],
            'doctor' => ['required','max:10', 'alpha_num'],
            'size' => ['required','max:3', 'alpha_num'],
            'weight' => ['required','max:3', 'alpha_num'],
            'other' => ['max:200'],
            'photo' => ['max:100'],
        ]);

        auth()->user()->update([
            'firstname'=>request('firstname'),
            'lastname'=>request('lastname'),
            'age'=>request('age'),
            'nameContact'=>request('nameContact'),
            'phoneContact'=>request('phoneContact'),
            'blood'=>request('blood'),
            'size'=>request('size'),
            'weight'=>request('weight'),
            'doctor'=>request('doctor'),
            'other'=>request('other'),
            'photo'=>request('photo'),
        ]);

        return redirect('/myaccount');
    }
}
