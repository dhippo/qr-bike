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
        'utilisateur_id',
        'firstname',
        'lastname',
        'phoneContact',
        'nameContact',
        'photo',
        'age',
        'size',
        'weight',
        'blood',
        'other',
        'doctor'];

    public $timestamps = false;

};
