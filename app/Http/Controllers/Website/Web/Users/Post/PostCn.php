<?php

namespace App\Http\Controllers\Website\Web\Users\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostCn extends Controller
{
    public function index()
    {
    	return view('website.pages.users.blog.index');
    }
}
