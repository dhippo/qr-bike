<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /*namespace App\Models;use Illuminate\Contracts\Auth\Authenticatable;use Illuminate\Auth\Authenticatable as BasicAuthenticatable;class User extends Model implements Authenticatable{use BasicAuthenticatable;*/

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [

        /* 1 */

        'email',
        'token',
        'password',
        'password_confirmation',

        /* Profil */

        'firstname',
        'lastname',
        'sex',
        'birth_date',
        'phone',
        'country',
        'city',
        'address',



        /* Health infos */

        'photo',
        'age',
        'size',
        'weight',
        'blood',

        'doctor',

        /* Others infos */

        'nameContact',
        'phoneContact',
        'about',

        'other'
                ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
       // 'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

        /* 1 */

        'email_verified_at' => 'datetime',
    ];

    public $timestamps = false;

}
