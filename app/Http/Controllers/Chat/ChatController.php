<?php

namespace App\Http\Controllers\Chat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    public function showchat()
    {
    	if (view()->exists('v_showchatcontent')) {
    		#если файл существует
    		return view('v_showchatcontent',['title'=>'Hello World']);//key=>value
    	}
    }
}
