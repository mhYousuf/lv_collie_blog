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

Route::get('/', 'Website\Web\HomeCn@index')->name('home.index');

Route::get('blog', 'Website\Web\HomeCn@blog')->name('blog.details');

