<?php

namespace App\Model\Categories;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table	= 'sub_category';

    protected $fillable	= [
    	'category_id',
    	'subcategory_name',
    	'status',
    	'created_by',
    	'updated_by'

    ];

    public function category()
    {
        return $this->belongsTo('App\Model\Categories\Category', 'category_id');
    }
}
