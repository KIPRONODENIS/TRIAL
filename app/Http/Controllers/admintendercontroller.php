<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;
use trial\tenders;

class admintendercontroller extends Controller
{
     public function index(request $request){

     	$this->validate($request,[
     		'tendername'=>'required|max:80',
     		'tenderid'=>'required|max:30',
     		'tendertype'=>'required|max:25'
     		
     		



     	]);
       

       $tenders=new tenders;
        $tenders->tender_id=$request->tenderid;
       $tenders->tender_name=$request->tendername;
      
       $tenders->tender_type=$request->tendertype;
       $tenders->Status='Available';
     

      $tenders->save();

      session()->flash('message',' tender Updated Successfully.');
 

 return redirect('/stenders');


    }
}
