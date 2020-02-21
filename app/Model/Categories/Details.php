<?php

namespace App\Model\Categories;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    protected $table	= 'bl_details';

    protected $fillable	= [
    	'name',
    	'date',
    	'image',
    	'heading',
    	'description',
    	'status',
    	'created_by',
    	'updated_by'
    ];

    // public function category()
    // {
    //     return $this->belongsto('App\Model\Categories\Category', 'cat_id');
    // }

    // public function sub_category()
    // {
    //     return $this->belongsto('App\Model\Categories\SubCategory', 'sub_cat_id');
    // }
}
