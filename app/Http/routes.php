<?php

Route::get('/',['uses'=>'HomeController@show','as'=>'home']);
Route::get('/login',['uses'=>'User\UserController@showlogin','as'=>'login']);
Route::get('/registration',['uses'=>'User\UserController@showregistration','as'=>'registration']);
Route::get('/category',['uses'=>'CategoryController@showallcategory','as'=>'showcat']);
Route::get('/chat',['uses'=>'ChatController@showchat','as'=>'registration']);
Route::match(['get','post'],'/test/{id?}',['uses'=>'TestController@showform','as'=>'test']);
Route::get('/about',['as'=>'about','uses'=>'AboutController@show']);
Route::get('/admin',['as'=>'admin','uses'=>'Admin\IndexController@show']);
Route::get('/admin/create',['as'=>'create','uses'=>'Admin\IndexController@create']);
Route::get('/admin/edit/{id}',['as'=>'edit','uses'=>'Admin\IndexController@edit']);
Route::get('/admin/delete/{id}',['as'=>'delete','uses'=>'Admin\IndexController@delete']);
Route::post('/admin/editcat',['as'=>'createcat','uses'=>'Admin\IndexController@editcat']);
Route::post('/admin/createcat',['as'=>'createcat','uses'=>'Admin\IndexController@createcat']);

/*Route::get('/',['as'=>'home','middleware'=>'mymiddle', function () {
    return view('welcome');
}]);*/
/*Route::get('/',['as'=>'home','uses'=>'Admin\IndexController@show']);
Route::get('/about',['as'=>'about','uses'=>'AboutController@show']);
Route::get('/about/{id}','FirstController@show');

Route::get('/articles',['uses'=>'Admin\Core@getArticles','as'=>'articles']);
Route::get('/article/{page}',['uses'=>'Admin\Core@getArticle','as'=>'page','middleware'=>'mymiddle'])->middleware(['mymiddle']);
#можно сделать несколько посредников
#'middleware'=>['mymiddle','auth'] и будет проходить через 2 посредника

#ресурс будет использовать созданные им методы
Route::resource('/pages','Admin\CoreResource');
//можно напрямую в маршруте указать какой метод будет обрабатывать путь!
Route::get('/pages/add','Admin\CoreResource@add');*/