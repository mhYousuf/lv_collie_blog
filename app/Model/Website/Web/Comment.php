<?php

namespace App\Model\Website\Web;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';

    protected $fillable = [
    	'name',
    	'email',
    	'message',
    	'status',

    	'created_by',
    	'updated_by'
    ];
}
