<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;
use trial\departments;

class admindepartmentcontroller extends Controller
{
     public function index(Request $request)
    {
      $this->validate($request,[
       'file'=>'required',
       'department'=>'required'
       
      ]);


       $id=$request->id;
     
       $department=$request->department;
       $filename=$request->file->getclientOriginalName();
    $request->file->storeAs('public',$filename);
      $data=departments::find($id);

       $data->description=$department;
        $data->file_name=$filename;

        $data->save();

        

        session()->flash('message',' updated succesfully.');
 

 return redirect('/tdepartment');


    }

}
