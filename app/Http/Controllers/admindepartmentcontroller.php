<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;
use trial\departments;

class admindepartmentcontroller extends Controller
{
     public function index(Request $request)
    {
      $this->validate($request,[
       'name'=>'required |min:3 ',
       'file'=>'required',
       'department'=>'required'
       
      ]);


       $name=$request->name;
     
       $description=$request->department;
       $filename=$request->file->getclientOriginalName();
        $request->file->storeAs('public',$filename);  
        $data=new departments();
        $data->description=$description;
        $data->file_name=$filename;
        $data->name=$name;
        $data->save();

        

        session()->flash('message',' Created succesfully.');
 

 return redirect('/tdepartment');


    }

}
