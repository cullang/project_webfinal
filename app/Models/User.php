<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'nama',
        'nim',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}