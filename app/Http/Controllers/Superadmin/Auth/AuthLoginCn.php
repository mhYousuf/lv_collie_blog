<?php

namespace App\Http\Controllers\Superadmin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Auth\AuthLogin;

class AuthLoginCn extends Controller
{
    public function index()
    {
    	if (auth()->guard('superadmin')->check()) {
    		return redirect()->route('admin.deshboard');
    	}
    	return view('adminblog.auth.index'); 
    }

    public function login(Request $request)
    {
    	$username	= $request->username;
    	$password	= $request->password;

    	if (auth()->guard('superadmin')->attempt(['username' => $username, 'password' => $password])) 
    	{
    		$log['online']	= 1;
    		$log['login_at']	= \Carbon\Carbon::now();

    		AuthLogin::whereId(auth()->guard('superadmin')->id())->update($log);
    		session()->flash('success', 'login success');
    	}else{
    		session()->flash('faild', 'login faild....');
    		return redirect()->route('admin.auth');
    	}

    	return redirect()->route('admin.deshboard');
    }
}
