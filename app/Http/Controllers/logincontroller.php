<?php

namespace trial\Http\Controllers;

use Illuminate\Http\Request;
use trial\Admin;
use DB;
class logincontroller extends Controller
{
  public function admin() {

  	return view('Admin.StudentAdmin');

  }
  

    public function teacher() {

    	return view('Admin.TeacherAdmin');

  }

   public function super() {


   	return view('Admin.SuperAdmin');

  }

   public function login(request $request) {


   		$this->validate($request,[
     		'username'=>'required|max:15',
     		'password'=>'required|max:10'

     	]);
     


     $data=DB::table('Admins')->where('username',$request->username)->get();

     if($data[0]->password==$request->password){


        if($request->username=="student"){

        return	redirect('/admin');
        }


        elseif($request->username=="teacher"){

        	return redirect('/teacher');
        }
        else{
       return  redirect('/superadmin');	
        }





     }else {
     session()->flash('message','Wrong Password/username');
     	return redirect()->back();
     }

  }
}
