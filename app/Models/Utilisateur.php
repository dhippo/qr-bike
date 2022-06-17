<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $fillable = ['email','password','password_confirmation','name'];
    public $timestamps = false;

};