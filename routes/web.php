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


   /*------------------------MAIN PAGE-------------------------*/

Route::get('/',['uses'=>'HomeController@show','as'=>'home']);


	/*------------------------ADMIN PAGE-------------------------*/

Route::get('/admin/create',['as'=>'create','uses'=>'Admin\IndexController@create']);

Route::get('/admin/edit/{id}',['as'=>'edit','uses'=>'Admin\IndexController@edit']);


Route::get('/admin/delete/{id}',['as'=>'delete','uses'=>'Admin\IndexController@delete']);


Route::post('/admin/editcat',['as'=>'createcat','uses'=>'Admin\IndexController@editcat']);


Route::post('/admin/createcat',['as'=>'createcat','uses'=>'Admin\IndexController@createcat']);

Route::get('/admin',['as'=>'admin','uses'=>'Admin\IndexController@show']);




	/*------------------------USER PAGE-------------------------*/

Route::get('/registration',['uses'=>'User\UserController@showregistration','as'=>'registration']);

Route::get('/cabinet',['uses'=>'User\UserController@showcabinet','as'=>'cabinet']);

Route::match(['get','post'],'/login',['uses'=>'User\UserController@showlogin','as'=>'login']);

Route::match(['get','post'],'/sregistration',['uses'=>'User\UserController@showregistration','as'=>'registration']);

Route::post('/slogin',['as'=>'submitlogin','uses'=>'User\UserController@submitlogin']);




	/*------------------------CATEGORY PAGE-------------------------*/

Route::get('/category',['uses'=>'Category\CategoryController@showallcategory','as'=>'showcat']);

Route::get('/category/{id}',['uses'=>'Category\CategoryController@get_one_theme','as'=>'showonetheme']);

Route::match(['get','post'],'/theme/{id}',['uses'=>'Category\CategoryController@get_message_by_theme_ids','as'=>'getmessagebyid']);



	/*------------------------CHAT PAGE-------------------------*/

Route::get('/chat',['uses'=>'Chat\ChatController@showchat','as'=>'registration']);






	/*------------------------ABOUT PAGE-------------------------*/

Route::get('/about',['as'=>'about','uses'=>'About\AboutController@show']);

Route::get('/about',['as'=>'about','uses'=>'About\AboutController@showcontent']);









Route::match(['get','post'],'/test/{id?}',['uses'=>'TestController@showform','as'=>'test']);


















