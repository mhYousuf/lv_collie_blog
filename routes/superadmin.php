<?php



Route::get('admin', 'Superadmin\Auth\AuthLoginCn@index')->name('admin.auth');

Route::group(['prefix' => 'admin-auth', 'as' => 'auth.', 'namespace' => 'Superadmin\Auth'], function()
{
	Route::post('login', 'AuthLoginCn@login')->name('login');
	Route::get('register', 'RegisterCn@store')->name('register');
	Route::post('logout', 'LogoutCn@logout')->name('logout');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Superadmin\Admin', 'as' => 'admin.', 'middleware' => 'sauth'], function()
{
	Route::get('deshboard', 'Deshboard\DeshboardCn@index')->name('deshboard');

	/*======================basic=================*/
	Route::prefix('basic')->group(function(){
	Route::get('/', 'Setup\Basic\BasicCn@index')->name('basic.manage');
	Route::get('create/{id?}', 'Setup\Basic\BasicCn@form');
	Route::post('store', 'Setup\Basic\BasicCn@store')->name('basic.store');
	});
	/*============social icon============*/
	Route::prefix('social')->group(function(){
	Route::get('/', 'Setup\Social\SocialCn@index')->name('social.manage');
	Route::get('create/{id?}', 'Setup\Social\SocialCn@form');
	Route::post('store', 'Setup\Social\SocialCn@store')->name('social.store');
	Route::get('destory/{id}', 'Setup\Social\SocialCn@destory');
	});
	/*==========Category============*/
	Route::prefix('category')->group(function(){
	Route::get('/', 'Categories\Category\CategoryCn@index')->name('category');
	Route::get('create/{id?}', 'Categories\Category\CategoryCn@form');
	Route::post('store', 'Categories\Category\CategoryCn@store')->name('category.store');
	Route::get('destory/{id}', 'Categories\Category\CategoryCn@destory');
	});
	/*================sub category==============*/
	Route::prefix('sub-category')->group(function(){
	Route::get('/', 'Categories\SubCategory\SubCategoryCn@index')->name('subcategory');
	Route::get('create/{id?}', 'Categories\SubCategory\SubCategoryCn@form');
	Route::post('store', 'Categories\SubCategory\SubCategoryCn@store')->name('subcategory.store');
	Route::get('destory/{id}', 'Categories\SubCategory\SubCategoryCn@destory');
	});
	/*===============Details===============*/
	Route::prefix('details')->group(function(){
	Route::get('/', 'Categories\Details\DetailsCn@index')->name('category.details');
	Route::get('create/{id?}', 'Categories\Details\DetailsCn@form');
	Route::post('store', 'Categories\Details\DetailsCn@store')->name('detailscategory.store');
	Route::get('destory/{id}', 'Categories\Details\DetailsCn@destory');
	});
});