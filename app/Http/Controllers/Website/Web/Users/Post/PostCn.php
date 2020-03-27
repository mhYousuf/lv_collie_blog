<?php

namespace App\Http\Controllers\Website\Web\Users\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Categories\Details;
use App\Model\Categories\Category;
use App\Model\Categories\SubCategory;
// use App\Model\Website\Users\Register;
use Image;

class PostCn extends Controller
{
    public function index()
    {
        $usr_id = auth()->guard('webusers')->id();
        $data['users_post']  = Details::with('user')->where(['user_id' => $usr_id, 'status' => 1])->orderBy('id', 'desc')->get();
        return view('website.pages.users.blog.index', $data);
    }

    public function post($id = null)
    {
        $data['value']           = Details::find($id);
        
        $data['categorie']       = Category::where(['status' => 1])->orderBy('id', 'desc')->get();
        $data['subcategory']     = SubCategory::where(['status' => 1])->orderBy('id', 'desc')->get();
    	return view('website.pages.users.blog.create', $data);
    }

    public function store(Request $request)
    {
        $data['user_id']      = auth()->guard('webusers')->id();
        $data['category_id']  = $request->category_id;
        $data['sub_cat_id']   = $request->sub_cat_id;
        $data['date']         = $request->date;
        $data['heading']      = $request->heading;
        $data['description']  = $request->description;
        $data['status']       = $request->status;
        $id                   = $request->id;

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

        if (!$id) {
            $data['created_at'] = date('Y-m-d H:i:s');
            $save               = Details::create($data);
            session()->flash('success', 'Your Data Insert Success');
        }else
        {
            $data['updated_at'] = date('Y-m-d H:i:s');
            $update             = Details::whereId($id)->update($data);
            session()->flash('success', 'Your Data Update Success');
        }

        session()->put('details', Details::find(1));
        return redirect()->route('users.index');
    }

    public function destroy($id)
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
