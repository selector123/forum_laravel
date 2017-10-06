<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public static function get_categories()
    {
    	$result = DB::select("SELECT * FROM `categories`");
        if ($result) {
        	return $result;
        }
    }
    public static function get_one_theme($id)
    {
    	$result = DB::select("SELECT * FROM `obs_forums` WHERE section = ?",[$id]);
        if ($result) {
        	return $result;
        }
    }
}
