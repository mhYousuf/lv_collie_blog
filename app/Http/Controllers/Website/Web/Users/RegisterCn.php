<?php

namespace App\Http\Controllers\Website\Web\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Model\Website\Users\Register;

class RegisterCn extends Controller
{
    public function index()
    {
    	return view('website.pages.users.auth.register.index');
    }

    public function store(Request $request)
    {
    	// dd($request->all());
    	$id 				= $request->id;
    	$data['name']	    = $request->name;
    	$data['email']		= $request->email;
    	$data['phone']		= $request->phone;
    	$data['password']	= Hash::make($request->password);
    	$data['address']	= $request->address;
    	$data['status']	    = 1;
    	$data['online']	    = 0;

    	
        if (!$id) {
            $save   = Register::create($data);
            session()->flash('succes', 'Register success..');
        }else{
            session()->flash('faild', 'Register faild..');
        }    	

    	return redirect()->route('users.login');
    }
}
