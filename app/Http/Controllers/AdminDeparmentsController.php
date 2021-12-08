<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;

class AdminDeparmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments =\trial\departments::all();
        return view('superPages.departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('TeacherPages.Department');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $is_edit = $request->has('id');
      $this->validate($request,[
        'name'=>'required |min:3 ',
        'file'=> !$is_edit ? 'required' : '',
        'department'=>'required'
        
       ]);
 
 
        $name=$request->name;
      
        $description=$request->department;
        if($is_edit){
            $department = \trial\departments::find($request->id);
            $message = 'Department updated successfully';
           
        }else{
            $department = new \trial\departments();
            $message = 'Department created successfully';
           
        }
       
        if($request->hasFile('file')){
            $filename=$request->file->getclientOriginalName();
            $request->file->storeAs('public',$filename);  
           
        }

     

         $department->file_name=$request->hasFile('file') ? $filename : $department->file_name;
         $department->name=$name;
         $department->description=$description;
         $department->save();
 
         
 
         session()->flash('message',$message);
  
 
  return redirect('admin/tdepartment');
 
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $department = \trial\departments::find($id);
        return view('TeacherPages.Department',compact('department'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = \trial\departments::find($id);
        $department->delete();
        session()->flash('message','Department deleted successfully');
        return redirect('admin/tdepartment');
    }
}
