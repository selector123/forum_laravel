<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class CategoryController extends Controller
{
    public function showallcategory()
    {
    	if (view()->exists('allcategory')) {
    		#если файл существует
    		$result1 = Category::get_all_themes();
    		return view('allcategory',['obscat'=>$result1,'title'=>'Все категории']);//key=>value
    	}
    }
    public function get_one_theme($id)
    {
    	$result = Category::get_theme_by_id($id);
    	$name = Category::get_theme_name($id);
    	if (view()->exists('onetheme')) {
    		#если файл существует
    		return view('onetheme',['themes'=>$result,'title'=>'категория','name'=>$name]);//key=>value
    	}
    }
}
