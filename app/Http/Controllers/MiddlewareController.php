<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddlewareController extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware('auth');

    }
    public function huhu () 
    {
    $a = "Tia Nurjanah";
    return "Nama : ".$a;
	}

}
