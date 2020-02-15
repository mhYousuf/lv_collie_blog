<?php

namespace App\Http\Controllers\Superadmin\Admin\Categories\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Categories\Category;

class CategoryCn extends Controller
{
    public function index()
    {
    	$data['category']	= Category::orderBy('id', 'desc')->get();
    	return view('adminblog.pages.all_category.Category.index', $data);
    }

    public function form(Request $request, $id = '')
    {
    	$data['value']	= Category::find($request->id);
    	return view('adminblog.pages.all_category.Category.create', $data);
    }

    public function store(Request $request)
    {
    	$id 	        = $request->id;
    	$data['name']	= $request->name;
    	$data['status']	= $request->status;


    	if (!$id) {
    		$data['created_at']	= date('Y-m-d H:i:s');
    		$save				= Category::create($data);
            session()->flash('insert', 'Success');
    	}else{
    		$data['updated_at']	= date('Y-m-d H:i:s');
    		$update 			= Category::whereId($id)->update($data);
            session()->flash('update', 'Success');
    	}


    	session()->put('category', Category::find(1));
        return redirect()->route('admin.category');
    }
}
