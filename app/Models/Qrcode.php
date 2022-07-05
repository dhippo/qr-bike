<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qrcode extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'token',
        'infos',
    ];

    protected $casts = [
        'infos' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
