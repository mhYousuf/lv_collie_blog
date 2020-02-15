<?php

namespace App\Model\Setup;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = 'social';

    protected $fillable	= [
    	'icon',
    	'url',
    	'status',
    	
    	'created_by',
    	'updated_by'
    ];
}
