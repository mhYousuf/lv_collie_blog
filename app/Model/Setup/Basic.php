<?php

namespace App\Model\Setup;

use Illuminate\Database\Eloquent\Model;

class Basic extends Model
{
    protected $table = 'basic';

    protected $fillable = [
    	'title',
    	'website_name',
    	'phone',
    	'email',
    	'logo',
    	'footer_logo',
    	'address',
    	'copy_name',
    	'copy_link',
    	'copy_year',
    	'footer_description',
    	'status',
    	'created_by',
    	'updated_by'

    ];
}

