<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;
use trial\management;

class managementcontroller extends Controller
{
    public function super($management = null){
      $managementDescription = management::where('name', $management)->first()->description ?? null;
 
      return view('superPages.management',compact('managementDescription','management'));
      
    
    }


    public function getHistory() {
      $management=management::where('name', 'history')->first();
      return view('AdminPages.history', compact('management'));
    }
    public function update(request $request){

      $name=$request->name;
      $management=management::where('name', $name)->first();
    	$this->validate($request,[
     		'management'=>'required|min:600',
         'name' => 'required',
     		'file'=>is_null($management) ? 'required' : ''
     	]);
      $message="updated succesfully.";
      if(is_null($management)) {
          $management=new management();
          $message="created succesfully.";
         
      }
     
          // $management=$request->management;
      if($request->has('file')) {
        $filename=$request->file->getclientOriginalName();
        $request->file->storeAs('public',$filename);
        $management->file_name=$filename;
      }

        $management->description=$request->management;
        $management->name = $request->name;
        $management->save();

        session()->flash('message',$message);

        return redirect()->back();
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

      $id=1;
      $management=management::where('name','history')->first();
    	$this->validate($request,[
     		'history'=>'required|max:2800|min:500',
     		'file'=> $management===null ? 'required' : 'null'
     	]);
       
      if(is_null($management)) {
          $management=new management();
          $management->name = "history";
      }
      if($request->has('file')) {
        $filename=$request->file->getclientOriginalName();
        $request->file->storeAs('public',$filename);
        $management->file_name=$filename;
      }
       
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
