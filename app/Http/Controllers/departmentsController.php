<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;
use trial\departments;
use trial\teachers;

class departmentsController extends Controller
{
    public function index() {

$data=[];


$data=departments::all();

return view('pages.department',compact('data'));
}
}
