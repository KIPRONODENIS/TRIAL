<?php

namespace trial\Http\Controllers;
use trial\management;

use Illuminate\Http\Request;

class aboutuscontroller extends Controller
{
    public function index(){
    	$management=new management;
    	$management=$management->all();
		
    	return view('pages.about',compact('management'));
    }
}
