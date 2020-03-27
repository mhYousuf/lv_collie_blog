<?php

namespace App\Http\Controllers\Website\Web\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeshboardCn extends Controller
{
    public function index()
    {
    	return view('website.pages.users.deshboard.deshboard');
    }
}
