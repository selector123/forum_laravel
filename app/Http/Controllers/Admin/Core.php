<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Core extends Controller
{
    public function getArticles()
   	{
   		# code...
   	}
   	public function getArticle($id)
   	{
   		echo 'ответ'.$id;
   	}
}
