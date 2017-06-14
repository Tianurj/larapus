<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddlewareController extends Controller
{
    //
    public function__constract()
    {
    	$this->middleware('auth');

    }
    public function huhu () 
    {
    $a = "Tia Nurjanah";
    return "Nama : ".$a;
	}

}
