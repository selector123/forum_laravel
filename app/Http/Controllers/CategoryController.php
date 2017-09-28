<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class CategoryController extends Controller
{
    public function showallcategory()
    {
    	if (view()->exists('allcategory')) {
    		#если файл существует
    		$result1 = DB::select("SELECT * FROM `categories`");
    		return view('allcategory',['obscat'=>$result1,'title'=>'Все категории']);//key=>value
    	}
    }
}
