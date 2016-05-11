<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'avatar','type'
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
