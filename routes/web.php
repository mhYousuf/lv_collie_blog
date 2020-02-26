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
Route::group(['prefix' => 'home', 'namespace' => 'Website\Web', 'as' => 'web.', 'middleware' => 'webauth'], function()
{
Route::get('/', 'HomeCn@index')->name('home');
});

Route::get('blog', 'Website\Web\HomeCn@blog')->name('blog.details');

Route::get('user/blog', 'Website\Web\Users\Post\PostCn@index')->name('users.post');
Route::post('user/store', 'Website\Web\Users\Post\PostCn@store')->name('users.store');

// Route::get('blog/comment', 'Website\Web\Comment\CommentCn@index')->name('blog.comment');
Route::post('comment', 'Website\Web\Comment\CommentCn@store')->name('comment.reply');


Route::get('register', 'Website\Web\Users\RegisterCn@index')->name('users.register');
Route::post('register/store', 'Website\Web\Users\RegisterCn@store')->name('register.store');

Route::get('login', 'Website\Web\Users\LoginCn@index')->name('users.login');

Route::group(['prefix' => 'users-auth', 'as' => 'users.', 'namespace' => 'Website\Web\Users'], function()
{
Route::post('login', 'LoginCn@login')->name('auth');
});

