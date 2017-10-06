<?php

namespace App\Http\Controllers\Admin;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
     public function show()
    {
    	if (view()->exists('v_showadmincontent')) {
    		#если файл существует
            $rescat = DB::select("SELECT * FROM `categories`");
            $rescatc = count($rescat);
            $rescatc++;
            for ($i=1; $i < $rescatc; $i++) { 
                $result[$i] = DB::select("SELECT * FROM `obs_forums` WHERE section = ?",[$i]);
            }
    		return view('v_showadmincontent',['title'=>'Adminpanel','result'=>$result,'rescat'=>$rescat]);//key=>value
    	}
    	
    	#задаем значение для переменной
    	#2 способ
    	#$data = array('title'=>'Hello World');
    	#3 cпособ 
    	#return view('default.template')->('title','Hello World 2');
    	#default/welcome.blade.php
    }
    public function create()
    {
        if (view()->exists('v_showcreatecontent')) {
            #если файл существует
            return view('v_showcreatecontent',['title'=>'Создать тему']);//key=>value
        }
    }
    public function edit($id)
    {
        if(view()->exists('v_showeditcontent')){
            $result = DB::select("SELECT * FROM `obs_forums` WHERE id=:id",['id'=>$id]);
            return view('v_showeditcontent',['title'=>'Редактировать тему','id'=>$id,'result'=>$result]);
        }
    }
    public function editcat($id)
    {
        if (isset($_POST['submit'])) {
                $section = $_POST['section'];
                $close = $_POST['close'];
                $name = $_POST['name'];
                $author = $_POST['author'];
                $result = DB::update("UPDATE `obs_forums` SET `section`= :section,`close`=:close,`name`=:name,`author`=:author WHERE WHERE id=:id",['section'=>$section ,'close'=>$close ,'name'=> $name,'author'=> $author,'id'=>$id ]);
            if ($result) {
                echo 'Категория изменена';
                return redirect()->route('admin');
            }
        }
    }
    public function createcat()
    {
        if (isset($_POST['submit'])) {
                $section = $_POST['section'];
                $close = $_POST['close'];
                $name = $_POST['name'];
                $author = $_POST['author'];
            $result = DB::insert("INSERT INTO `obs_forums` (`section`,`close`,`name`,`author`,`last_post`) VALUES (?,?,?,?,?)",[
                    $section,$close,$name,$author,$name
                ]);
            if ($result) {
                echo 'Данные успешно внесены!';
                echo '<a href="/admin">В админпанель</a>';
            }
            }
    }
    public function delete($id)
    {
        $result = DB::delete("DELETE FROM `obs_forums` WHERE id = ?",[$id]);
        if ($result) {
            echo 'Данные удалены!';
            return redirect()->route('admin');
        }
    }
}
