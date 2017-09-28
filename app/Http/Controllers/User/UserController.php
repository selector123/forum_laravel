<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function showlogin()
    {
    	if (view()->exists('user')) {
    		#если файл существует
    		return view('user',['title'=>'Hello World']);//key=>value
    	}
    }

    public function showregistration()
    {
    	if (view()->exists('userreg')) {
    		#если файл существует
    		return view('userreg',['title'=>'Hello World']);//key=>value
    	}
    }
}
