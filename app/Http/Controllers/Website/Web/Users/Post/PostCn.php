<?php

namespace App\Http\Controllers\Website\Web\Users\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Categories\Details;
use App\Model\Website\Users\Register;
use Image;

class PostCn extends Controller
{
    public function index()
    {
        $data['users']  = Register::where(['status' => 1])->get();
    	return view('website.pages.users.blog.index', $data);
    }

    public function store(Request $request)
    {
    	// dd($request->all());
    	$id 	              = $request->id;
    	$data['user_id']	  = $request->user_id;
    	$data['date']	      = $request->date;
    	$data['heading']	  = $request->heading;
        $data['description']  = $request->description;
        $data['status']       = 1;
        $data['name']         = '';
    	$data['image']        = $request->image;

    	// $files = ['image'];
     //    foreach ($files as $key => $file)
     //    {
     //        if($request->hasFile($file))
     //        {
     //            $doc = $request->file($file);
     //            $name = time()+($key+1).'.'.$doc->getClientOriginalExtension();
     //            $path = 'upload/users/';
     //            Image::make($doc)->save($path.$name);
     //            $data[$file] = $name;
     //            if($id)
     //            	{
	    //             	$old_data = Details::find($id);
	    //         		if($old_data->$file && file_exists($path.$old_data->$file)) { unlink($path.$old_data->$file); }
     //         		}

     //        }
     //    }

        if (!$id) {
        	$data['created_at']	= date('Y-m-d H:i:s');
        	$save				= Details::create($data);
        	session()->flash('success', 'Your Data Insert Success');
        }else
        {
        	
        	session()->flash('failed', 'Your Data failed...');
        }

        session()->put('details', Details::find(1));
        return redirect()->back();
    }
}
