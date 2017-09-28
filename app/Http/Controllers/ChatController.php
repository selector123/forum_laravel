<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ChatController extends Controller
{
    public function showchat()
    {
    	if (view()->exists('chat')) {
    		#если файл существует
    		return view('chat',['title'=>'Hello World']);//key=>value
    	}
    }}
