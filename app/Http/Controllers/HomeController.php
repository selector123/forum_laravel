<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
	public function show()
	    {
	    	if (view()->exists('home')) {
    		#если файл существует
    		return view('home',['title'=>'Главная']);//key=>value
    	}
	    }    



}
