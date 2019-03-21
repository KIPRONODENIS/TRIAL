<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;
use trial\gallery;

class galleryviewController extends Controller
{
   public function index(){

$data=gallery::all();

	return view('Pages.gallery',compact('data'));

}

}
