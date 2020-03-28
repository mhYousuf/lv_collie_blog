<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/cache:clear',function(){
  Artisan::call('cache:clear');
  return 'cache:clear';
});

Route::get('/view:clear',function(){
   Artisan::call('view:clear');
   return 'view:clear';
});
Route::get('/config:cache',function(){
   Artisan::call('config:cache');
   return 'config:cache';
});
Route::get('/route:clear',function(){
   Artisan::call('route:clear');
   return 'route:clear';
});

Route::get('/', 'Website\Web\HomeCn@index')->name('web.home');
Route::group(['prefix' => 'user', 'namespace' => 'Website\Web\Users', 'as' => 'users.', 'middleware' => 'webauth'], function()
{
Route::get('index', 'Post\PostCn@index')->name('index');
Route::get('blog/{id?}', 'Post\PostCn@post')->name('post');
Route::post('store', 'Post\PostCn@store')->name('store');
Route::get('destroy/{id}', 'Post\PostCn@destroy')->name('destroy');
});

Route::group(['as' => 'blog.'], function(){
Route::get('blog/categories/{cat_slug}/{sub_cat_slug?}', 'Website\Web\HomeCn@blog')->name('categories');
Route::get('blog/details/{dl_slug}', 'Website\Web\HomeCn@details')->name('details');
});

Route::get('user/deshboard', 'Website\Web\Users\DeshboardCn@index')->name('users.deshboard');


// Route::get('blog/comment', 'Website\Web\Comment\CommentCn@index')->name('blog.comment');
Route::post('comment', 'Website\Web\Comment\CommentCn@store')->name('comment.reply');


Route::get('register', 'Website\Web\Users\RegisterCn@index')->name('users.register');
Route::post('register/store', 'Website\Web\Users\RegisterCn@store')->name('register.store');


Route::group(['prefix' => 'users-auth', 'as' => 'users.', 'namespace' => 'Website\Web\Users'], function()
{
	Route::get('login', 'LoginCn@index')->name('login');
	Route::post('logout', 'LogoutCn@logout')->name('auth.logout');
	Route::post('user', 'LoginCn@login')->name('auth');
});

