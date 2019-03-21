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

       switch($id){

       case '1':$department='Mathematics';break;

       case '2':$department='Languages';break;

       case '3':$department='Sciences';break;

       case '4':$department='humanities';break;

       case '5':$department='ICT';break;

       case '6':$department='Guidance and counseling';break;

       case '7':$department='Boarding';break;

       case '8':$department='Examination';break;



        }
      
       $teachers=$request->teachersname;
       
   
      $data= new teachers;


       
        $data->find($id);

        $data->departments_id=$id;
           $data->department_name=$department;
              $data->teachers_name=$teachers;


        $data->save();

        

        session()->flash('message',' updated succesfully.');
 

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
