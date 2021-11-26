<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;
use trial\events;
use trial\recentEvents;
use trial\home;
use trial\Club;
use trial\departments;

class eventscontroller extends Controller
{
   public function index(){
   	$events=new events;

   	$events= $events->all();

   	$recent=new recentEvents;
    
	$clubs = Club::all();

   	$recent= $recent->all();
   	
   	$home=new home;
    $data=$home->all();

    $Ddata=[];

    $Ddata=departments::all();
  return view('pages.index',compact('events','data','recent','Ddata','clubs'));
   }

}
