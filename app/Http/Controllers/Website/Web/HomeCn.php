<?php

namespace App\Http\Controllers\Website\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Website\Web\Comment;
use App\Model\Categories\Category;
use App\Model\Categories\SubCategory;
use App\Model\Categories\Details;

class HomeCn extends Controller
{
    public function index()
    {
        // $data['h_details']       = Category::with(['details' => function($q){
        //     $q->where(['status' => 1])->take(3)->orderBy('id', 'desc');
        //     }])->where(['status' => 1])->orderBy('id', 'asc')->get();

        $data['categories']      = Category::with(['details' => function($q){
            $q->where(['status' => 1])->take(10)->orderBy('id', 'desc');
            }])->where(['status' => 1])->orderBy('id', 'asc')->get();
        
        $data['details']          = Details::where(['status' =>1])->orderBy('id', 'desc')->get();
        $data['post']             = Details::with('cat', 'sub_category')->where(['status' =>1])->orderBy('id', 'desc')->get();
        $data['posts']            = Category::with('subcategory', 'details')->where(['status' =>1])->take(3)->orderBy('id', 'asc')->get();
        $data['cposts']           = Details::with('sub_category', 'cat')->where(['status' =>1])->take(9)->orderBy('id', 'desc')->get();
    	return view('website.pages.home.index', $data);
    }

    public function blog($cat_slug, $sub_cat_slug = null)
    {
        // $data['h_details']       = Category::with(['details' => function($q){
        //     $q->where(['status' => 1])->take(3)->orderBy('id', 'desc');
        //     }])->where(['status' => 1])->orderBy('id', 'asc')->get();
        // $data['h_details']       = Category::with('details')->where(['status' => 1])->take(3)->orderBy('id', 'desc')->get();
        $data['post']           = Details::with('cat', 'sub_category')->where(['status' =>1])->orderBy('id', 'desc')->get();
        $cat_id                 = explode('-', $cat_slug);
        $data['category']       = Category::where('id', end($cat_id))->firstOrFail();
        $data['details']        = Details::with('sub_category')->where('category_id', end($cat_id))->orderBy('id', 'desc')->get();

        if ($sub_cat_slug) {
            $sub_cat_id             = explode('-', $sub_cat_slug);
            $data['subcategory']    = SubCategory::where('id', end($sub_cat_id))->firstOrFail();
            $data['details']        = Details::with('sub_category')->where(['category_id' => end($cat_id), 'sub_cat_id' => end($sub_cat_id), 'status' =>1])->orderBy('id', 'desc')->get();
        }

        // dd($data);
    	return view('website.pages.blog.list', $data);
    }

    public function details($dl_slug)
    {
        // $data['h_details']       = Category::with(['details' => function($q){
        //     $q->where(['status' => 1])->take(3)->orderBy('id', 'desc');
        //     }])->where(['status' => 1])->orderBy('id', 'asc')->get();
        // $data['post']       = Details::with('cat', 'sub_category')->where(['status' =>1])->orderBy('id', 'desc')->first();
        $post_id            = explode('-', $dl_slug);
        $data['detail']     = Details::with('sub_category')->where('post_id', end($post_id))->orderBy('id', 'desc')->firstOrFail();
        $data['comment']    = Comment::orderBy('id', 'desc')->get();
        

        return view('website.pages.blog.details', $data);
    }

    public function view()
    {
        $data['categories']      = Category::with(['details' => function($q){
            $q->where(['status' => 1])->take(10)->orderBy('id', 'desc');
            }])->where(['status' => 1])->orderBy('id', 'asc')->get();
        $data['posts']            = Category::with('subcategory', 'details')->where(['status' =>1])->take(3)->orderBy('id', 'asc')->get();
        $data['cposts']           = Details::with('sub_category', 'cat')->where(['status' =>1])->take(9)->orderBy('id', 'desc')->get();
        $data['post']   = Details::with('cat', 'sub_category')->where(['status' =>1])->orderBy('id', 'desc')->get();
        $data['view']   = Details::with('cat', 'sub_category')->where(['status' => 1])->orderBy('id', 'desc')->get();
        return view('website.pages.blog.blog_view', $data);
    }
}
