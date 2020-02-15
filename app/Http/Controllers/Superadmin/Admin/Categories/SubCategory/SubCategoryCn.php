<?php

namespace App\Http\Controllers\Superadmin\Admin\Categories\SubCategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Categories\SubCategory;
use App\Model\Categories\Category;

class SubCategoryCn extends Controller
{
    public function index()
    {
    	$data['subcategory']	= SubCategory::orderBy('id', 'desc')->get();
    	return view('adminblog.pages.all_category.subcategory.index', $data);
    }

    public function form(Request $request, $id = '')
    {
    	$data['value']	= SubCategory::find($request->id);
    	$data['category'] = Category::where(['status' => 1])->get();
    	return view('adminblog.pages.all_category.subcategory.create', $data);
    }

    public function store(Request $request)
    {
    	$id 	= $request->id;
    	$data['category_id']	= $request->category_id;
    	$data['subcategory_name']	= $request->subcategory_name;
    	$data['status']		= $request->status;


    	if (!$id) {
    		$data['created_at']	= date('Y-m-d H:i:s');
    		$save				= SubCategory::create($data);
    	}else{
    		$data['updated_at']	= date('Y-m-d H:i:s');
    		$update 			= SubCategory::whereId($id)->update($data);
    	}

    	session()->put('subcategory', SubCategory::find(1));
    	return redirect()->route('admin.subcategory');
    }
}
