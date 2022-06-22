<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infosante extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'firstname','lastname','phoneContact','nameContact', 'photo','age','size','weight','blood','other','doctor'];
    public $timestamps = false;
}