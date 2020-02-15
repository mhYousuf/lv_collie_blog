<?php

namespace App\Http\Controllers\Superadmin\Admin\Setup\Basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Setup\Basic;
use Image;
class BasicCn extends Controller
{
    public function index()
    {
    	$data['basic']	= Basic::orderBy('id', 'desc')->get();
    	return view('adminblog.pages.setup.basic.index', $data);
    }

    public function form(Request $request, $id = '')
    {
    	$data['value']	= Basic::find($request->id);
    	return view('adminblog.pages.setup.basic.create', $data);
    }

    public function store(Request $request)
    {
    	$id 	= $request->id;
    	$data['title']	= $request->title;
    	$data['website_name']	= $request->website_name;
    	$data['phone']	= $request->phone;
    	$data['email']	= $request->email;
    	$data['address']	= $request->address;
    	$data['copy_name']	= $request->copy_name;
    	$data['copy_link']	= $request->copy_link;
    	$data['copy_year']	= $request->copy_year;
    	$data['footer_description']	= $request->footer_description;
    	$data['status']	= $request->status;

    	$files = ['logo', 'footer_logo'];
        foreach ($files as $key => $file)
        {
            if($request->hasFile($file))
            {
                $doc = $request->file($file);
                $name = time()+($key+1).'.'.$doc->getClientOriginalExtension();
                $path = 'upload/basic/';
                Image::make($doc)->save($path.$name);
                $data[$file] = $name;
                if($id)
                	{
	                	$old_data = Basic::find($id);
	            		if($old_data->$file && file_exists($path.$old_data->$file)) { unlink($path.$old_data->$file); }
	                 // $file->move('basic', ['id' => $id], $path, [$file]);
             		}

            }
        }

        if(!$id)
        {
            $data['created_at']     = date('Y-m-d H:i:s');
            $save                   = Basic::create($data);
            session()->flash('insert', 'Success');
        } else {
            $data['updated_at']     = date('Y-m-d H:i:s');
            $update                 = Basic::whereId($id)->update($data);
            session()->flash('update', 'Success');
            
        }
        
        session()->put('basic', Basic::find(1));
        return redirect()->route('admin.basic.manage');
    }
}
