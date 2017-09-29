<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function get_theme_by_id($id)
    {
    	$result = DB::select("SELECT * FROM `obs_forums` WHERE section = :id",[':id'=>$id]);
    	if ($result) {
    		return $result;
    	}
    }
    public static function get_all_themes()
    {
    	$result = DB::select("SELECT * FROM `categories`");
    	if ($result) {
    		return $result;
    	}
    }
    public static function get_theme_name($id)
    {
    	$result = DB::select("SELECT name FROM `categories` WHERE id = :id",[':id'=>$id]);
    	if ($result) {
    		return $result;
    	}
    }
}
