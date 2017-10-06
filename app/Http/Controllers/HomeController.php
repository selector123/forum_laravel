<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
	public function show()
	    {
	    	if (view()->exists('v_showhomecontent')) {
    		#если файл существует
    		return view('v_showhomecontent',['title'=>'Главная']);//key=>value
    	}
	    }    



}
