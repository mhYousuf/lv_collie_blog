<?php

namespace App\Http\Controllers\Website\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeCn extends Controller
{
    public function index()
    {
    	return view('website.pages.home.index');
    }

    public function blog()
    {
    	return view('website.pages.blog.blog');
    }
}
