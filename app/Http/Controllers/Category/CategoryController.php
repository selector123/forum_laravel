<?php

namespace App\Http\Controllers\Category;
use App\Category;
use App\Error;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function showallcategory()
    {
    	if (view()->exists('v_showallcategorycontent')) {
    		#если файл существует
    		$result1 = Category::get_all_themes();
            $restheme = count($result1);
            for ($i=0; $i <= $restheme; $i++) {
                if ($i == 0) {
                    continue;
                }
                $counts = count(Category::get_theme_by_id($i));
                $themequantity[$i] = $counts; 
            }
    		return view('v_showallcategorycontent',['obscat'=>$result1,'title'=>'Все категории','themequantity'=>$themequantity]);//key=>value
    	}
    }
    public function get_one_theme($id)
    {

    	$result = Category::get_theme_by_id($id);
    	$name = Category::get_category_name($id);
    	if (view()->exists('v_showonethemecontent')) {
    		#если файл существует
    		return view('v_showonethemecontent',['themes'=>$result,'title'=>'категория','name'=>$name]);//key=>value
    	}
    }
    public function get_message_by_theme_ids($id)
    {
        if (isset($_POST['submit'])) {
            $author = Error::Clean($_POST['name']);
            $text = Error::Clean($_POST['text']);

            $result = Category::send_message($id,$author,$text);
            if ($result) {
                
            }

        }
        $name = Category::get_theme_name($id);
        $result = Category::get_message_by_theme_id($id);
        if (view()->exists('v_showmessagebythemecontent')) {
            #если файл существует
            return view('v_showmessagebythemecontent',['title'=>'сообщения','name'=>$name,'resmessage'=>$result]);//key=>value
        }
    }
}
