<?php

namespace App\Http\Controllers\Website\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Website\Web\Comment;

class HomeCn extends Controller
{
    public function index()
    {
    	return view('website.pages.home.index');
    }

    public function blog()
    {
    	$data['comment']	= Comment::orderBy('id', 'desc')->get();
    	return view('website.pages.blog.blog', $data);
    }
}
