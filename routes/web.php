<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use trial\Http\Controllers\ClubsController;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });


route::get('about', 'aboutuscontroller@index');
route::get('department', 'departmentsController@index');
route::get('academic', 'academicscontroller@index');
route::get('tender', 'tenderscontroller@index');
route::get('contactus', 'contactuscontroller@index')->name('contactus');
route::post('contactus','contactuscontroller@store');
route::get('/', 'eventscontroller@index');
route::get('assignment', 'assignmentcontroller@download');
route::get('gallery','galleryviewController@index');

Route::group(['middleware' =>'auth'], function() {
route::post('assign','assignmentcontroller@assign');
route::get('adminhome','adminhomecontroller@index');
route::post('adminhome','adminhomecontroller@update');
route::get('admin','logincontroller@admin');
route::get('teacher','logincontroller@teacher');
route::get('superadmin','logincontroller@super');
route::get('home',function(){
	return view('AdminPages.home');

});
route::get('history','managementcontroller@getHistory');

route::get('management',function(){
	return view('AdminPages.management');

});

route::get('staff',function(){
	return view('AdminPages.staff');

});

route::get('studentleaders',function(){
	return view('AdminPages.studentleaders');

});


route::get('clubs',function(){
	return view('AdminPages.clubs');

});

route::get('tassignments',function(){
	return view('TeacherPages.assignments');

});

route::get('tdepartment',function(){
	return view('TeacherPages.Department');

});

route::get('tmanagement',function(){
	return view('TeacherPages.management');

});
route::get('tstaff',function(){
	return view('TeacherPages.staff');

});

route::get('tuniforms',function(){
	return view('TeacherPages.uniforms');

});

route::get('addteacher',function(){
	$departments = \trial\departments::all();
	return view('TeacherPages.addTeacher',compact('departments'));

});

route::get('removeteacher',function(){
	return view('TeacherPages.removeTeacher');

});



route::get('sfees',function(){
	return view('superPages.schoolFees');

});
route::get('stenders',function(){
	return view('superPages.addtender');

});
route::resource('dtenders','deletetendercontroller');
route::get('suniforms',function(){
	return view('superPages.uniforms');

});


	//Send an SMS
route::get('send','sendmessagecontroller@send');
route::get('agallery',function(){
		return view('AdminPages.gallery');
	
});
	
route::post('agallery','gallerycontroller@index');
	
	
route::get('messages','chatscontroller@index');
	route::post('messages','chatscontroller@users');
	
	route::post('reply','chatscontroller@reply');
	
	route::get('sevents','admineventscontroller@super');
	route::post('sevents','admineventscontroller@update');
	
	route::get('tevents','admineventscontroller@teacher');
	route::post('tevents','admineventscontroller@update');
	
	
	route::get('smanagement','managementcontroller@super');
	route::get('admin/management/{management}/edit','managementcontroller@super');
	route::post('smanagement','managementcontroller@update');
	
	
	route::post('tmanagement','managementcontroller@teacher');
	
	route::post('management','managementcontroller@student');
	
	route::post('studentleaders','managementcontroller@studentleaders');
	
	route::post('history','managementcontroller@history');
	
	route::post('tstaff','managementcontroller@staff');
	
	route::post('staff','managementcontroller@adminstaff');
	
	route::post('sfees','adminacademicscontroller@update');
	
	route::post('suniforms','adminacademicscontroller@uniforms');
	
	route::post('tuniforms','adminacademicscontroller@teacher');
	
	route::post('tdepartment','admindepartmentcontroller@index');
	
	route::post('stenders','admintendercontroller@index');
	
	route::post('tassignments','adminassignmentcontroller@index');
	
	route::post('addteacher','adminteachercontroller@index');
	
	route::post('removeteacher','adminteachercontroller@remove');
	
	route::get('removeteacher','adminteachercontroller@teachers');
	
	route::resource('delete','adminteachercontroller');

	//Get  clubs
	route::get('admin/clubs', [ClubsController::class, 'index'])->name('admin.clubs');
	//Get Create View
	route::get('admin/clubs/create',[ClubsController::class, 'create'])->name('admin.clubs.create');
	//Store a club
	route::post('admin/clubs',[ClubsController::class, 'store'])->name('admin.clubs.store');

		//Update a club
	route::get('admin/clubs/{id}/edit',[ClubsController::class, 'edit'])->name('admin.clubs.edit');
	

			//Update a club
	route::put('admin/clubs/{id}',[ClubsController::class, 'update'])->name('admin.clubs.update');
	

	//View a club
	route::get('admin/clubs/{id}',[ClubsController::class, 'view'])->name('admin.clubs.view');
	

		//View a club
	route::delete('admin/clubs/{id}',[ClubsController::class, 'destroy'])->name('admin.clubs.destroy');
	
		
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
