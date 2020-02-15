<?php

namespace App\Http\Controllers\Superadmin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Model\Auth\Authlogin;

class RegisterCn extends Controller
{
    public function store(Request $request)
    {
        $data['role']           = 'Superadmin';
        $data['name']           = 'MD. Yousuf Hossain';
        $data['email']          = 'yousufhossain50@gmail.com';
        $data['phone']          = '01839072709';
        $data['username']       = 'admin';
        $data['password']       = Hash::make('admin');
        $data['status']         = 1;
        $data['online']         = 0;
        $data['created_by']     = 1;
        $data['created_at']     = \Carbon\Carbon::now();
        // SoftwareAuth::create($data);
        Authlogin::updateOrCreate(['id' => 1], $data);

        // foreach ($users as $user) {
        //     echo $user->id;
        // }
    }
}
