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

    public function subCat()
    {
    	return $this->hasMany(SubCategory::class, 'category_id');
    }

    public function detail()
    {
        return $this->hasMany(Details::class, 'user_id');
    }

    public function details()
    {
        return $this->hasMany(Details::class, 'category_id');
    }

    public function subcategory()
    {
        return $this->belongsto(SubCategory::class, 'category_id');
    }
}
