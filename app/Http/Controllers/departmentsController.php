<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;
use trial\departments;
use trial\teachers;

class departmentsController extends Controller
{
    public function index() {

$data=[];


  $departments=departments::all();


$mathematics=departments::find('1')->teachers;

$languages=departments::find('2')->teachers;

$sciences=departments::find('3')->teachers;

$humanities=departments::find('4')->teachers;

$gc =departments::find('5')->teachers;

$examination=departments::find('6')->teachers;

$ict=departments::find('7')->teachers;

$boarding=departments::find('8')->teachers;





  
foreach($departments as $department ) {
	if($department->id==2){
 $data['languages']=$department->file_name;
 $data['ldescription']=$department->description;
	}

	if($department->id==1){
  $data['mathematics']=$department->file_name;
  $data['mdescription']=$department->description;
	}

	if($department->id==3){
  $data['science']=$department->file_name;
  $data['sdescription']=$department->description;
	}

	if($department->id==4){
  $data['humanities']=$department->file_name;
  $data['hdescription']=$department->description;
	}
	if($department->id==5){
  $data['g&c']=$department->file_name;
  $data['gdescription']=$department->description;
	}

	if($department->id==7){
  $data['ict']=$department->file_name;
  $data['idescription']=$department->description;
	}

	if($department->id==8){
  $data['boarding']=$department->file_name;
  $data['bdescription']=$department->description;
	}

	
if($department->id==6){
  $data['examination']=$department->file_name;
  $data['edescription']=$department->description;
	}
	if($department->id==9){
  $data['games']=$department->file_name;
  $data['gamesdescription']=$department->description;
	}

}

return view('pages.department',compact('data','mathematics','languages','sciences','humanities','gc','examination','ict','boarding'));
}
}
