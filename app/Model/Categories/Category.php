<?php

namespace App\Model\Categories;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table	= 'category';

    protected $fillable	= [
    	'name',
    	'status',
    	'created_by',
    	'updated_by'
    ];
}
