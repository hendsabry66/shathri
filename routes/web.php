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
Route::prefix('admin')->group(function () {
	Route::get('/login','UserController@login');
	Route::post('/login','UserController@postLogin');
  	Route::middleware('admin')->group(function () {
    	Route::resource('/users','UserController');
    	Route::resource('/posts','PostController');
    	Route::resource('/articles','ArticleController');
    	Route::resource('/images','ImageController');
	});
});
