<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model implements Authenticatable
{
    use BasicAuthenticatable;
    protected $fillable = ['email','password','password_confirmation','name'];
    public $timestamps = false;

};