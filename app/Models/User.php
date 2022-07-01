<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Model implements Authenticatable
{
    use BasicAuthenticatable;
    /*namespace App\Models;use Illuminate\Contracts\Auth\Authenticatable;use Illuminate\Auth\Authenticatable as BasicAuthenticatable;class User extends Model implements Authenticatable{use BasicAuthenticatable;*/

    protected $fillable = [

        /* 1 */

        'email',
        'password',
        'token',
        'active_token',

        /* Profil */

        'sex',
        'firstname',
        'infos',
        'lastname',
        'phone',
        'country',
        'city',
        'photo',

        /* Health infos */

        'age',
        'size',
        'weight',
        'blood',
        'other',

        /* Contacts */

        'nameContact',
        'phoneContact',
        'nameDoctor',
        'phoneDoctor',


                ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
      // 'password2',
       // 'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

        /* 1 */

       // 'email_verified_at' => 'datetime',

        'infos' => 'array',
    ];

    public $timestamps = false;

};
