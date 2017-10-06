<?php

namespace App\Http\Controllers\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function show()
    {
    	if (view()->exists('default.about')) {
    		
    		//выборка данных из БД
    		#$obsforum = DB::select("SELECT * FROM `obs_forums` WHERE id=?",[1]);
    		#или where id=:id",['id'=>2]

    		/*DB::insert("INSERT INTO `obs_forums` (`section`,`created_at`,`updated_at`,`close`,`name`,`author`,`last_post`) VALUES (?,?,?,?,?,?,?)",[
    				1,2019,2020,1,'vasya','petya','123'
    			]);*/
    		#dump($obsforum);

    		#return (new Response());
    		/*#если файл существует
    		return view('default.about',['title'=>'Hello World']);//key=>value*/
    	}
    }
    public function showcontent()
    {
        if (view()->exists('v_showaboutcontent')) {

            return view('v_showaboutcontent',['title'=>'Вопросы']);
        }
    }
}
