<?php

namespace App\Http\Controllers\Superadmin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Auth\AuthLogin;

class LogoutCn extends Controller
{
   	public function logout(Request $request)
    {
    	$log['online']          = 0;
        $log['logout_at']       = \Carbon\Carbon::now();
        AuthLogin::whereId(auth()->guard('superadmin')->id())->update($log);
        
        auth()->guard('superadmin')->logout();
        return redirect()->route('auth.login');
    } 
}
