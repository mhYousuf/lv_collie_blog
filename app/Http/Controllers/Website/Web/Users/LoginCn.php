<?php

namespace App\Http\Controllers\Website\Web\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Website\Users\Register;

class LoginCn extends Controller
{
    public function index()
    {
    	if (auth()->guard('webusers')->check()) {
    		return redirect()->route('web.home');
    	}
    	return view('website.pages.users.auth.login.index');
    }

    public function login(Request $request)
    {
    	// dd($request->all());
    	$email		= $request->email;
    	$password	= $request->password;

    	if (auth()->guard('webusers')->attempt(['email' => $email, 'password' => $password])) {
    		$log['online']	= 1;
    		$log['login_at']	= \Carbon\Carbon::now();

    		Register::whereId(auth()->guard('webusers')->id())->update($log);
    		session()->flash('success', 'login success....');
    	}else{
    		session()->flash('faild', 'login faild....');
    		return redirect()->route('users.login');
    	}

    	return redirect()->route('web.home');
    }
}
