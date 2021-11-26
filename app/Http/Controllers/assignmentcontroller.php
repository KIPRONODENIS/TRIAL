<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class assignmentcontroller extends Controller
{
    public function download(){
         $downloads=DB::table('assignments')->get();
    	return view('pages.assignment',compact('downloads'));
    }

    public function assign(request $request){

    	$downloads=DB::table('assignments')->where('form','=',$request->form)->get();

        
       return view('pages.assignment',compact('downloads'));

    }
}
