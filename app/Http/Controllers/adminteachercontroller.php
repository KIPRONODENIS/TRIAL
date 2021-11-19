<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;
use trial\teachers;
use DB;
class adminteachercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(Request $request)
    {
      $this->validate($request,[
       

       'teachersname'=>'required|max:35'
       
      ]);


       $id=$request->id;

      
       $teachers=$request->teachersname;
       
   
      $data= new teachers;

         $data->department_id=$id;
         $data->department_name=\trial\departments::find($id)->name;
         $data->teachers_name=$teachers;


        $data->save();

        

        session()->flash('message',' created succesfully.');
 

 return redirect('/addteacher');


  


    }
   
   
   
    public function teachers(){ 

         $teachers=DB::table('teachers')->get();
      return view('TeacherPages.removeTeacher',compact('teachers'));
    }

     public function remove(request $request){

      $teachers=DB::table('teachers')->where('departments_id','=',$request->id)->get();

        
       return view('TeacherPages.removeTeacher',compact('teachers'));

    }

   

   
    
    public function destroy($id)
    {
       $data=teachers::find($id);
       $data->delete();

       session()->flash('message','Deleted succesfully');

       return redirect('/removeteacher');


    }
}
