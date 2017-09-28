<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ResponsiveController extends Controller
{
    public function showresponse()
    {
    	switch ($_POST['name']) {
    		case 'tab-1':
    			echo 'tab-1';
    			break;
    		case 'tab-2':
    			echo 'tab-2';
    			break;
    		case 'tab-3':
    			echo 'tab-3';
    			break;
    		case 'tab-4':
    			echo 'tab-4';
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    }
}
