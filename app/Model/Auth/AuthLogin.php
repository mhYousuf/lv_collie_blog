<?php

namespace App\Model\Auth;

use Illuminate\Foundation\Auth\User as Authenticatable;

class AuthLogin extends Authenticatable
{
    protected $table = 'admin';
    
    protected $fillable = [
        'role',
        'name',
        'email',
        'phone',
        'username',
        'password',
        'status',
        'online'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
