<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class User extends Model implements Authenticatable
{
    use BasicAuthenticatable;

    protected $fillable = [
        'email',
        'password',
        'password_confirmation',
        'token',
        'firstname',
        'lastname',
        'photo',
        'age',
        'sex',
        'active_token',
        ];

    public $timestamps = false;

    public function qrcodes()
    {
        return $this->hasMany(Qrcode::class);
    }

};
