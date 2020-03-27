<?php

namespace App\Http\Controllers\Website\Web\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Website\Users\Register;

class LogoutCn extends Controller
{
    public function logout(Request $request)
    {
    	$log['online']          = 0;
        $log['logout_at']       = \Carbon\Carbon::now();
        Register::whereId(auth()->guard('webusers')->id())->update($log);
        
        auth()->guard('webusers')->logout();
        return redirect()->route('web.home');
    } 
}
