<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;
use trial\Http\Requests\tendersvalidation;
use trial\tenders;
class tendersController extends Controller

{
    

    public function index(){
    	 $tenders=new tenders;

         $tenders=$tenders->all();

   
    return view('pages.tender',compact('tenders'));
    }
}
