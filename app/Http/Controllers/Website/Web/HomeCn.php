<?php

namespace App\Http\Controllers\Website\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Website\Web\Comment;
use App\Model\Categories\Category;
use App\Model\Categories\Details;

class HomeCn extends Controller
{
    public function index()
    {
    	$data['category']	= Category::where(['status' =>1])->orderBy('id', 'desc')->first();
    	$data['details']	= Details::where(['status' =>1])->orderBy('id', 'desc')->get();
    	return view('website.pages.home.index', $data);
    }

    public function blog()
    {
    	$data['detail']	= Details::where(['status' =>1])->orderBy('id', 'desc')->first();
    	$data['comment']	= Comment::orderBy('id', 'desc')->get();
    	return view('website.pages.blog.blog', $data);
    }
}
