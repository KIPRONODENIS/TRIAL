<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;
use trial\home;

class adminhomecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminPages.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
   
   
   
    public function update(Request $request)
    {
      $this->validate($request,[
       'CaptionHeading'=>'required|max:25',
       'CaptionDescription'=>'required|max:35',
       'file'=>'required'
      ]);


       $slide=$request->slide;
      $captionHeading=$request->CaptionHeading;
       $description=$request->CaptionDescription;


       $filename=$request->file->getclientOriginalName();
    $request->file->storeAs($filename);
      $data=home::find($slide);
       $data->caption_heading=$captionHeading;
       $data->description=$description;
        $data->file_name=$filename;

        $data->save();

        

        session()->flash('message',' updated succesfully.');
 

 return redirect('/adminhome');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
}
