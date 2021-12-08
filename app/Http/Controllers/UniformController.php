<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;

class UniformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uniforms = \trial\uniforms::all();
        return view('superPages.uniforms.index', compact('uniforms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
            return view('superPages.uniforms');
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request,[
            'description'=>'required',
            'file'=> is_null($request->id) ?  'required|mimes:jpeg,png,jpg,gif,svg': '',
            'name' =>'required'
        ]);
      
       $name=$request->name;
     // $management=$request->management;

     if($request->hasFile('file')){
        $filename=$request->file->getclientOriginalName();
        $request->file->storeAs('public',$filename);
    }

    if(is_null($request->id) ){
        $uniform=new \trial\uniforms();
        $message='Uniform Created Successfully';
    }else{
        $uniform=\trial\uniforms::find($request->id);
        $message='Uniform Updated Successfully';
    }

     $uniform->name=$name;

     $uniform->file_name= $request->hasFile('file') ? $filename : $uniform->file_name;
     $uniform->description=$request->description;
      

     $uniform->save();

     session()->flash('message',$message);

     return redirect('/admin/suniforms');
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

        $uniform = \trial\uniforms::find($id) ?? null;
        return view('superPages.uniforms', compact('uniform'));
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
        // 
        $uniform=\trial\uniforms::find($id);
        $uniform->delete();
        session()->flash('message','Uniform Deleted Successfully');
        return redirect('/admin/suniforms');
    }
}
