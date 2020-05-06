<?php

namespace App\Http\Controllers\Website\Web\Comment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Website\Web\Comment;

class CommentCn extends Controller
{
    public function store(Request $request)
    {
    	$id					= $request->id;
    	$data['name']		= $request->name;
    	$data['email']		= $request->email;
    	$data['message']	= $request->message;
    	$data['status']			= 1;

    	$save	= Comment::create($data);

    	return redirect()->route('blog.details');
    }

    public function reply()
    {
        return view('website.pages.comment.reply');
    }
}
