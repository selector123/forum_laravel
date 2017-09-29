<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Error extends Model
{
    public static function Clean($value)
	{
	$value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;
	}
}
