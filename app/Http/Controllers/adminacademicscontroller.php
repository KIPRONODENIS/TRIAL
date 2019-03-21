<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;
use trial\fees;
use trial\uniforms;

class adminacademicscontroller extends Controller
{
     public function update(request $request){

    	$this->validate($request,[
     		'term1'=>'required|max:5|min:3',
     		'term2'=>'required|max:5|min:3',
     		'term3'=>'required|max:5|min:3'
     		
     		



     	]);
       



    	 $id=$request->id;
     
      // $management=$request->management;

      // $filename=$request->file->getclientOriginalName();
   // $request->file->storeAs('public',$filename);
      $fees=fees::find($id);
    
   $fees->term1=$request->term1;
   $fees->term2=$request->term2;
   $fees->term3=$request->term3;

        $fees->save();

              session()->flash('message',' updated succesfully.');

         return redirect('/sfees');



    }
     public function uniforms(request $request){

    	$this->validate($request,[
     		'description'=>'required',
     		'file'=>'required'
     		



     	]);
       



    	 $id=$request->id;
     
      // $management=$request->management;

       $filename=$request->file->getclientOriginalName();
    $request->file->storeAs('public',$filename);
      $uniforms=uniforms::find($id);
       $uniforms->file_name=$filename;
    $uniforms->description=$request->description;
       

        $uniforms->save();

              session()->flash('message',' updated succesfully.');

         return redirect('/suniforms');



    }



 public function teacher(request $request){

    	$this->validate($request,[
     		'description'=>'required',
     		'file'=>'required'
     		



     	]);
       



    	 $id=$request->id;
     
      // $management=$request->management;

       $filename=$request->file->getclientOriginalName();
    $request->file->storeAs('public',$filename);
      $uniforms=uniforms::find($id);
       $uniforms->file_name=$filename;
    $uniforms->description=$request->description;
       

        $uniforms->save();

              session()->flash('message',' updated succesfully.');

         return redirect('/tuniforms');



    }


}
