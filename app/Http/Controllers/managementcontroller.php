<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;
use trial\management;

class managementcontroller extends Controller
{
    public function super(){
    	return view('superPages.management');
    }

    public function update(request $request){

    	$this->validate($request,[
     		'management'=>'required|min:1000',
     		'file'=>'required'
     	]);
       



    	 $id=$request->id;
     
      // $management=$request->management;

    $filename=$request->file->getclientOriginalName();
    $request->file->storeAs('public',$filename);
      $management=management::find($id);
      $message="updated succesfully.";
      if(is_null($management)) {
          $management=new management();
          $message="created succesfully.";
      }
        $management->file_name=$filename;
        $management->description=$request->management;
       

        $management->save();

              session()->flash('message',$message);

         return redirect('/smanagement');



    }

    public function teacher(request $request){

    	$this->validate($request,[
     		'management'=>'required|max:1500|min:1000',
     		'file'=>'required'
     		



     	]);
       



    	 $id=$request->id;
     
      // $management=$request->management;

       $filename=$request->file->getclientOriginalName();
    $request->file->storeAs('public',$filename);
      $management=management::find($id);
      if(is_null( $management)) {
          $management=new management();
      }
       $management->file_name=$filename;
    $management->description=$request->management;
       

        $management->save();

              session()->flash('message',' updated succesfully.');

         return redirect('/tmanagement');



    }
    

     public function student(request $request){

    	$this->validate($request,[
     		'management'=>'required|max:1500|min:1000',
     		'file'=>'required'
     		



     	]);
       



    	 $id=$request->id;
     
      // $management=$request->management;

       $filename=$request->file->getclientOriginalName();
    $request->file->storeAs('public',$filename);
      $management=management::find($id);
       $management->file_name=$filename;
    $management->description=$request->management;
       

        $management->save();

              session()->flash('message',' updated succesfully.');

         return redirect('/management');



    }
    

public function studentleaders(request $request){

    	$this->validate($request,[
     		'studentleaders'=>'required|max:1000|min:500',
     		'file'=>'required'
     	]);
       



    	 $id=$request->id;
     
      // $management=$request->management;

       $filename=$request->file->getclientOriginalName();
    $request->file->storeAs('public',$filename);
      $management=management::find($id);
      if(is_null($management)) {
        $management=new management();
        $management->id = $id;
      }
       $management->file_name=$filename;
    $management->description=$request->studentleaders;
       

        $management->save();

              session()->flash('message',' updated succesfully.');

         return redirect('/studentleaders');



    }
    
    public function history(request $request){

    	$this->validate($request,[
     		'history'=>'required|max:1800|min:500',
     		'file'=>'required'
     	]);
       



    	 $id=1;
     
      // $management=$request->management;

       $filename=$request->file->getclientOriginalName();
    $request->file->storeAs('public',$filename);
      $management=management::find($id);
      if(is_null($management)) {
          $management=new management();
      }
       $management->file_name=$filename;
    $management->description=$request->history;
       

        $management->save();

              session()->flash('message',' updated succesfully.');

         return redirect('/history');



    }

     public function staff(request $request){

      $this->validate($request,[
        'file'=>'required'
      ]);
       



       $id=$request->id;
     
      // $management=$request->management;

       $filename=$request->file->getclientOriginalName();
    $request->file->storeAs('public',$filename);
    
      $management=management::find($id);
      if(is_null($management)) {
          $management=new management();   
      }
       $management->file_name=$filename;

        $management->save();

              session()->flash('message',' updated succesfully.');

         return redirect('/tstaff');



    }
    
public function adminstaff(request $request){

      $this->validate($request,[
       
        
        'file'=>'required'
        



      ]);
       



       $id=$request->id;
     
      // $management=$request->management;

      $filename=$request->file->getclientOriginalName();
      $request->file->storeAs('public',$filename);
      $management=management::find($id);
      if(is_null( $management)) {
          $management=new management();
      }
       $management->file_name=$filename;
        $management->save();

              session()->flash('message',' updated succesfully.');

         return redirect('/staff');
    }
    










}
