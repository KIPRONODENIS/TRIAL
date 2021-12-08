<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = \trial\Subject::paginate(10);
         return view('superPages.subject.index',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superPages.subject.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:subjects|max:255',
        ]);
        if($request->has('id')){
            $subject = \trial\Subject::find($request->id);
            $subject->name = $request->name;
            $subject->save();
            $message = 'Subject updated successfully';
        }else{
            $subject = new \trial\Subject;
            $subject->name = $request->name;
            $subject->save();
            $message = 'Subject created successfully';
        }
      return   redirect('admin/subjects')->with('success', $message);
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
        $subject = \trial\Subject::find($id);
        return view('superPages.subject.create',compact('subject'));
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
        $subject = \trial\Subject::find($id);
        $subject->delete();
        return redirect('admin/subjects')->with('success','Subject deleted successfully');
    }
}
