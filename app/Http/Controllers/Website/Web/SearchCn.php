<?php

namespace App\Http\Controllers\Website\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Categories\Details;

class SearchCn extends Controller
{
    public function search(Request $request)
    {
    	$query = $request->get('query', '');
    	$data  = Details::where('heading', 'Like','%'.$query.'%')->get();
        
        foreach ($data as $key => $v) {
            $data[$key]->prod_url = route('blog.details', [clean($v->heading.'-'.$v->post_id)]);
        }

    	return response()->json($data);
    	// return redirect()->back();
    }
    	
    }
