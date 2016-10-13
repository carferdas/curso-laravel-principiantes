<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Storage;

class User extends Authenticatable
{
    
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'avatar','type'
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function topics()
    {
    	return $this->hasMany(Topic::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
