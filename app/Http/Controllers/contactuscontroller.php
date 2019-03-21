<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;
use trial\Http\Requests\contactusValidation;
use trial\contactus;
class ContactusController extends Controller
{
    //

    public function index(){

        return view('pages.contactus');
    }



     public function store(contactusValidation $request){
$contactus= new contactus;


      $contactus->name=$request->name;
      $contactus->phone=$request->phone;
      $contactus->subject=$request->subject;
      $contactus->message=$request->textarea;


 $contactus->save();
 session()->flash('message',' your message has been received,Thank you.');
 

 return redirect('/contactus');


    }
    

}
