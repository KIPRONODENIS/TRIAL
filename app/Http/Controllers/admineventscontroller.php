<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;
use trial\events;
class admineventscontroller extends Controller
{
    public function super(){
    	return view('superPages.events');
    }

      public function teacher(){
    	return view('TeacherPages.events');
    }

     public function update(request $request){

     	$this->validate($request,[
     		'EventTitle'=>'required|max:30',
     		'EventDate'=>'required|max:25',
     		'StartTime'=>'required|max:25',
     		'EndTime'=>'required|max:10'
     		



     	]);
       

       $events=new events;
       $events->event_title=$request->EventTitle;
       $events->event_date=$request->EventDate;
       $events->start_time=$request->StartTime;
       $events->end_time=$request->EndTime;

      $events->save();

      session()->flash('message',' Event Updated Successfully.');
 

 return redirect('tevents');


    }
}
