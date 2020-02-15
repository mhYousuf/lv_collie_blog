<?php

namespace App\Http\Controllers\Superadmin\Admin\Deshboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeshboardCn extends Controller
{
    public function index()
    {
    	return view('adminblog.pages.content.index');
    }
}
