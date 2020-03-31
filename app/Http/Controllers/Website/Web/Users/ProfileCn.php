<?php

namespace App\Http\Controllers\Website\Web\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\Website\Users\Register;
use Image;

class ProfileCn extends Controller
{
    public function index()
    {
    	$usr_id = auth()->guard('webusers')->id();
    	$data['profile']	= Register::where('id', $usr_id)->first();
    	return view('website.pages.users.profile.index', $data);
    }

    public function create($id = null)
    {
    	$usr_id = auth()->guard('webusers')->id();
    	$data['user']	= Register::where('id', $usr_id)->first();
    	return view('website.pages.users.profile.create', $data);
    }

    public function store(Request $request)
    {
    	// dd($request->all());
    	// $data['name']	= $request->name;
    	// $data['email']	= $request->email;
    	// $data['phone']	= $request->phone;
    	// $data['birth_date']	= $request->birth_date;
    	// $data['gender']	= $request->gender;

    	$id = auth()->guard('webusers')->id();

        $validator = Validator::make($request->all(), [
            'phone' => ['required', 'unique:web_users,phone,'.$id],
            'email' => ['required', 'string', 'email', 'unique:web_users,email,'.$id],
            // 'username' => ['required', 'unique:web_users'],
            // 'date_of_birth' =>'required|date|before:17 years ago',
        ]);

        if ($validator->passes()) {
            $data['name']            = $request->name;
            $data['phone']           = $request->phone;
            $data['email']           = $request->email;
            $data['birth_date']      = $request->birth_date;
            $data['gender']          = $request->gender;
    		$data['address']		 = $request->address;

            
            $files = ['image'];
            foreach ($files as $key => $file)
            {
                if($request->hasFile($file))
                {
                    $doc = $request->file($file);
                    $name = time()+($key+1).'.'.$doc->getClientOriginalExtension();
                    $path = uploadPath('upload/users/');
                    Image::make($doc)->resize(250, 250)->save($path.$name);
                    $data[$file] = $name;
                    if($id) dbClearFile('web_users', ['id' => $id], $path, [$file]);
                }
            }

            $update = Register::whereId($id)->update($data);

            session()->flash('msg', 'Profile Update Successfull');
            return redirect()->route('users.profile');
        } else {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }
}
