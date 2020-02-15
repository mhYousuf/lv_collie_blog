<?php

namespace App\Http\Controllers\Superadmin\Admin\Setup\Social;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Setup\Social;

class SocialCn extends Controller
{
    public function index()
    {
    	$data['social']	= Social::orderBy('id', 'desc')->get();
    	return view('adminblog.pages.setup.social.index', $data);
    }

    public function form(Request $request, $id = '')
    {
    	$data['value']	= Social::find($request->id);
    	return view('adminblog.pages.setup.social.create', $data);
    }

    public function store(Request $request)
    {
    	$id 	= $request->id;
    	$data['icon']	= $request->icon;
    	$data['url']	= $request->url;
    	$data['status'] = $request->status;


    	if (!$id) {
    		$data['created_at']	= date('Y-m-d H:i:s');
    		$save				= Social::create($data);
    		session()->flash('insert', 'Success');
    	}else{
    		$data['updated_at']	= date('Y-m-d H:i:s');
    		$update 			= Social::whereId($id)->update($data);
    		session()->flash('update', 'Success');
    	}

    	session()->put('social', Social::find(1));
        return redirect()->route('admin.social.manage');
    }
}
