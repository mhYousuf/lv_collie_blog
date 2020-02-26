<?php

namespace App\Model\Website\Users;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Register extends Authenticatable
{
    protected $table = 'users';

    protected $fillable = [
        'role',
    	'name',
    	'email',
    	'phone',
    	'password',
    	'address',
    	'status',
    	'online'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];
}
