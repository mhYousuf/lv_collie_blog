<?php

namespace App\Model\Website\Users;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Register extends Authenticatable
{
    protected $table = 'web_users';

    protected $fillable = [
        'access_code',
        'role',
        'facebook_id',
        'google_id',
        'name',
        'email',
        'phone',
        'username',
        'image',
        'birth_date',
        'gender',
        'verify_token',
        'password',
        'address',
        'verify_token',
        'status',
        'online',
        'created_by'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];
}
