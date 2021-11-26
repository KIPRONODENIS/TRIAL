<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;

use trial\uniforms;
use trial\fees;
class academicscontroller extends Controller
{
   public function index(){

   	$uniform= new uniforms;
   	$uniformtype=$uniform->all();
     

     $fees=new fees;
     $fees=$fees->all();
    return view('pages.academic',compact('uniformtype','fees'));
}


}
