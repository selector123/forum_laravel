<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
	/*protected $request;

	public function __construct(Request $request)
	{
		$this->request = $request;
	}*/


    public function showform(Request $request, $id=FALSE)
    {
    	/*if ($request->has('name')) {
    		# если значение есть выполнит
    	}*/
    	/*#вернет только эти поля
    	$request->only('name','surname');*/
    	/*#если хочешь убрать ячейки из массива
    	$request->except('name','surname');*/
    	#можно напрямую использовать ячейку name
    	#$request->name
    	#возвращает путь к контроллеру
    	#$request->path()
    	#проверить соответствие адреса 
    	#if($request->is('')){}
    	#получить полный url без get parametr
    	#$request->url()
    	#получить полный url
    	#$request->fullurl()
    	#return type of request
    	#$request->method()
    	#КАК СОХРАНИТЬ ДАННЫЕ В СЕССИИ
    	#if($request->isMethod('post')){
    	#сохранит предыдущие данные в сессии
    	#добавит все данные
    	#$request->flash();
    	#чтобы записать какие то определенные ячейки
    	#$request->flashOnly('name');
    	#чтобы записать какие то ячейки кроме 
    	#$request->flashExcept('name');
    	#перенаправление
    	#redirect()->route('home')
    	#получить все заголовки
    	#$request->header();
    	#сохраняет все пути в массиве со строки браузера
    	#$request->segments(); test/12

    #}
    	if ($request->isMethod('post')) {
    		$request->flash();
    	}
    	/*print_r($request->all());
    	echo '<H1>'.$request->input('name','default').'</H1>';#2 параметр значение по умолчанию*/
    	
    	return view('test',['title'=>'Hello']);
    }
    }
