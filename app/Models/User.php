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

        'email',
        'password',
        'token',
        'firstname',
        'lastname',
        'photo',
        'age',
        'sex',
        'active_token',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        //'password',
        // 'active_token',
        // 'token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

        // 'email_verified_at' => 'datetime',

        'infos' => 'array',
    ];

    public $timestamps = false;

    public function qrcodes()
    {
        return $this->hasMany(Qrcode::class);
    }

}

;
