<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;
use trial\gallery;

class gallerycontroller extends Controller
{
    public function index(request $request){

    	$this->validate($request,[
     		
     		'file'=>'required'
     		



     	]);
       



    	 $form=$request->form;
    	 $class=$request->class;

     
      // $management=$request->management;

       $filename=$request->file->getclientOriginalName();
    $request->file->storeAs('public',$filename);

      

      $gallery=new gallery;
      $gallery->form=$form;
      $gallery->class=$class;
      $gallery->file_name=$filename;


       
        $gallery->save();

              session()->flash('message',' updated succesfully.');

         return redirect('/agallery');



    }
}
