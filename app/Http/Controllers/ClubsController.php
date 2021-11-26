<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;
use trial\Http\Controllers\Controller;
use trial\Club;
class ClubsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubs= CLub::all();
        return view('AdminPages.clubs',compact('clubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('AdminPages.createClub');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $data=  $request->validate([
           'name'=>'required',
           'image'=>'required',
           'description' =>'required',
       ]);
     $path = $request->image->store('public');
    //Get the url without the '/public'
     $data['image'] = explode("/",$path)[1];
     $created=  Club::create($data);

    session()->flash('message',"Creation was successful!");

    return redirect()->route('admin.clubs');
      
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
    public function edit(Club $id)
    {
         $club=$id;
        return view('AdminPages.createClub',compact('club'));
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
        $data=  $request->validate([
            'name'=>'required',
            // 'image'=>'required',
            'description' =>'required',
        ]);
        if($request->has('image')) {
            $path = $request->image->store('public');
            //Get the url without the '/public'
             $data['image'] = explode("/",$path)[1];
        }

      $updated=  Club::find($id)->update($data);
 
     session()->flash('message',"updated was successful!");
 
     return redirect()->route('admin.clubs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $id)
    {
        $id->delete();
        session()->flash("success","Deleted SUccessfully");
        return redirect()->back();
    }
}
