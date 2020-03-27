<?php

namespace App\Model\Categories;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    protected $table	= 'bl_details';

    protected $fillable	= [
        'name',
        'user_id',
        'category_id',
    	'sub_cat_id',
    	'date',
    	'image',
    	'heading',
    	'description',
    	'status',
    	'created_by',
    	'updated_by'
    ];

    public function user()
    {
        return $this->belongsto('App\Model\Website\Users\Register', 'user_id');
    }

    // public function auser()
    // {
    //     return $this->belongsto('App\Model\Auth\AuthLogin', 'user_id');
    // }

    public function sub_category()
    {
        return $this->belongsto('App\Model\Categories\SubCategory', 'sub_cat_id');
    }

    public function cat()
    {
        return $this->belongsTo('App\Model\Categories\Category', 'category_id');
    }
}
