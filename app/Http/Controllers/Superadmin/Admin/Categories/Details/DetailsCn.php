<?php

namespace App\Http\Controllers\Superadmin\Admin\Categories\Details;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Categories\Details;
use App\Model\Categories\Category;
use App\Model\Categories\SubCategory;
use App\Model\Website\Users\Register;
// use App\Model\Auth\AuthLogin;
use Image;

class DetailsCn extends Controller
{
    public function index()
    {
        
    	$data['details']	= Details::with('cat', 'sub_category')->orderBy('id', 'desc')->get();
    	return view('adminblog.pages.all_category.blog_details.index', $data);
    }

    public function form(Request $request)
    {
    	$data['value']	         = Details::find($request->id);
        $data['users']           = Register::where(['status' => 1])->orderBy('id', 'desc')->get();
    	$data['category']	     = Category::where(['status'=> 1])->orderBy('id', 'desc')->get();
    	$data['sub_category']	 = SubCategory::where(['status' => 1])->orderBy('id', 'desc')->get();
    	return view('adminblog.pages.all_category.blog_details.create', $data);
    }

    public function store(Request $request)
    {
        $data['user_id']      = $request->user_id;
        $data['category_id']  = $request->category_id;
        $data['sub_cat_id']   = $request->sub_cat_id;
        $data['date']         = $request->date;
        $data['heading']      = $request->heading;
        $data['description']  = $request->description;
        $data['status']       = $request->status;
    	$id 	              = $request->id;

    	$files = ['image'];
        foreach ($files as $key => $file)
        {
            if($request->hasFile($file))
            {
                $doc = $request->file($file);
                $name = time()+($key+1).'.'.$doc->getClientOriginalExtension();
                $path = 'upload/details/';
                Image::make($doc)->save($path.$name);
                $data[$file] = $name;
                if($id)
                	{
	                	$old_data = Details::find($id);
	            		if($old_data->$file && file_exists($path.$old_data->$file)) { unlink($path.$old_data->$file); }
             		}

            }
        }
        // dd($data);

        if (!$id) {
        	$data['created_at']	= date('Y-m-d H:i:s');
        	$save				= Details::create($data);
        	session()->flash('success', 'Your Data Insert Success');
        }else
        {
        	$data['updated_at']	= date('Y-m-d H:i:s');
        	$update 			= Details::whereId($id)->update($data);
        	session()->flash('success', 'Your Data Update Success');
        }

        session()->put('details', Details::find(1));
        return redirect()->route('admin.category.details');
    }

    public function destory(Request $request, $id)
    {
        $delete = Details::find($id);
        $details_img    = array('image');
        foreach ($details_img as $key => $img) {
            $path = 'upload/details/';
            if($delete->$img && file_exists($path.$delete->$img)) { unlink($path.$delete->$img); }
        }
        $delete->delete();

        return redirect()->back();
    }
}
