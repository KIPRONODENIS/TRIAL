<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;

class AdminGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallerys = \trial\gallery::all();
        return view('superPages.gallery.index', compact('gallerys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('AdminPages.gallery');
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $is_edit = $request->has('id') ?? false;


    	$this->validate($request,[	
            'title' => 'required',
            'description' => 'required',
            'file'=> !$is_edit ? 'image|mimes:jpeg,png,jpg,gif,svg|max:2048' : ''
        ]);
      

        if($request->hasFile('file')){

            $filename=$request->file->getclientOriginalName();
            $request->file->storeAs('public',$filename);
      
        }
        

        if($is_edit){
            $gallery = \trial\gallery::find($request->id);

        }else{
            $gallery=new \trial\gallery;

        }

     // $management=$request->management;

     $gallery->title=$request->title;
     $gallery->description=$request->description;
     $gallery->file_name=$request->hasFile('file') ?  $filename : $gallery->file_name;

       $gallery->save();

             session()->flash('message',' updated succesfully.');

        return redirect('/admin/gallery');
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
        $gallery = \trial\gallery::find($id);
        return view('AdminPages.gallery',compact('gallery'));

    

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
    }
}
