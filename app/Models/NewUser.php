<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewUser extends Model
{
    use HasFactory;

    protected $fillable = [

        /* 1 */

        'email',
        'password',
        'token',
        'active_token',

        /* Profil */

        'firstname',
        'lastname',

        'phone',

        'street',
        'region',
        'country',
        'city',

        /* Data */

        'data'


    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [

          'password',
          'token',
          'active_token',

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

        'data' => 'array',

    ];

    public $timestamps = false;


}
