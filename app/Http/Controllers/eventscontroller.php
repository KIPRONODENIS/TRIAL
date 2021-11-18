<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;
use trial\events;
use trial\recentEvents;
use trial\home;
use trial\departments;

class eventscontroller extends Controller
{
   public function index(){

   	$events=new events;

   	$events= $events->all();

   	$recent=new recentEvents;

   	$recent= $recent->all();
   	
   		$home=new home;
    	$data=$home->all();

$Ddata=[];

 $departments=departments::all();

      foreach($departments as $department ) {
   if($department->id==2){
 $Ddata['languages']=$department->file_name;
 $Ddata['ldescription']=$department->description;
   }

   if($department->id==1){
  $Ddata['mathematics']=$department->file_name;
  $Ddata['mdescription']=$department->description;
   }

   if($department->id==3){
  $Ddata['science']=$department->file_name;
  $Ddata['sdescription']=$department->description;
   }

   if($department->id==4){
  $Ddata['humanities']=$department->file_name;
  $Ddata['hdescription']=$department->description;
   }
   if($department->id==5){
  $Ddata['g&c']=$department->file_name;
  $Ddata['gdescription']=$department->description;
   }

   if($department->id==7){
  $Ddata['ict']=$department->file_name;
  $Ddata['idescription']=$department->description;
   }

   if($department->id==8){
  $Ddata['boarding']=$department->file_name;
  $Ddata['bdescription']=$department->description;
   }

   
if($department->id==6){
  $Ddata['examination']=$department->file_name;
  $Ddata['edescription']=$department->description;
   }
   if($department->id==9){
  $Ddata['games']=$department->file_name;
  $Ddata['gamesdescription']=$department->description;
   }

}



   	return view('pages.index',compact('events','data','recent','Ddata'));

   }

}
