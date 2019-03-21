<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;

use trial\tenders;

class deletetendercontroller extends Controller
{
    public function index()
    {

        $data=tenders::all();

    return view('superPages.deletetender',compact('data'));
    }
   

    
    public function destroy($id)
    {
       $tenders=tenders::find($id);
       $tenders->delete();

        session()->flash('message','Deleted succesfully');

       return redirect('/dtenders');



    }
}
