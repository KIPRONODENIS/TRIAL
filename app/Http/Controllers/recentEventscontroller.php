<?php

namespace trial\Http\Controllers;


use Illuminate\Http\Request;
use trial\recentEvents;

class recentEventscontroller extends Controller
{
    
     public function recent(){

   	$recent=new recent;

   	$recent= $recent->all();

   	return view('pages.index',compact('recent'));
}
