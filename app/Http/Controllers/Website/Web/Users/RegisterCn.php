<?php

namespace App\Http\Controllers\Website\Web\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Model\Website\Users\Register;

class RegisterCn extends Controller
{
    public function index()
    {
    	return view('website.pages.users.auth.register.register');
    }

    public function store(Request $request)
    {
    	// dd($request->all());
        $validator = Validator::make($request->all(), [
        // 'name' => 'required|unique:web_users',
        'username' => 'required|unique:web_users,username',
        'email' => 'required|email|unique:web_users,email',
        'phone' => 'required|min:6|unique:web_users',
        'password' => 'required|min:6|unique:web_users',
        // 'email' => 'required|unique:web_users|',
        // 'body' => 'required',
            ]);

        // if ($validator->fails()) {
        //     return redirect()->back()
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        $data['access_code']     = uniqNum();
        $data['role']            = 'Webusers';
        $data['name']            = $request->name;
        $data['username']        = $request->username;
        $data['email']           = $request->email;
        $data['phone']           = $request->phone;
        $data['password']        = Hash::make($request->password);
        $data['address']         = $request->address;
        $data['image']           = '';
        $data['birth_date']      = '';
        $data['gender']          = '';
        $data['status']          = 1;
        $data['online']          = 0;
    	$id 				     = $request->id;

    	$check = Register::where('phone', $request->phone)->orWhere('email', $request->email)->orWhere('username', $request->username)->first();
        if($check)
        {
            // return response()->json(['data' => $check, 'type'=>'error']);
            // session()->flash('msg', 'Register Faild..');
            // session()->flash('type', 'Error');
            return redirect()->back()->withInput()->withErrors($validator);
        }

        
        Register::create($data);

        // session()->flash('succes', 'Register success..');
    	return redirect()->route('users.login');
    }
}
