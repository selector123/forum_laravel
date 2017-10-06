<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function get_message_by_theme_id($id)
    {
        $result = DB::select("SELECT * FROM `obs_messages` WHERE topic = :id",[':id'=>$id]);
        if ($result) {
            return $result;
        }
    }
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
    public static function get_category_name($id)
    {
    	$result = DB::select("SELECT name FROM `categories` WHERE id = :id",[':id'=>$id]);
    	if ($result) {
    		return $result;
    	}
    }
    public static function get_theme_name($id)
    {
        $result = DB::select("SELECT * FROM `obs_forums` WHERE id = :id",[':id'=>$id]);
        if ($result) {
            return $result;
        }
    }
    public static function send_message($id,$author,$text)
    {
        $result = DB::insert("INSERT INTO `obs_messages` (`topic`, `author`, `text`) VALUES (?,?,?)",[$id,$author,$text]);
        if ($result) {
            return $result;
        }
    }
}
