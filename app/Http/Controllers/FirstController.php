<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FirstController extends Controller
{
    public function show()
    {
    	echo 'hello';
    }
    public function show1()
    {
    	echo __METHOD__;
    }
}
