<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;
use trial\assignments;

class adminassignmentcontroller extends Controller
{
    public function index(request $request){

    	$this->validate($request,[
     		'file'=>'required'
     	]);
       

    	 $id=$request->form;
     
      // $management=$request->management;

       $filename=$request->file->getclientOriginalName();
       $request->file->storeAs('public',$filename);
      $assignments= new assignments;

       $assignments->file_subject=$request->subject;

        $assignments->file_name="/storage/{$filename}" ;

        $assignments->form=$request->form;
   
       

        $assignments->save();

              session()->flash('message',' updated succesfully.');

         return redirect('/tassignments');



    }
 
}
