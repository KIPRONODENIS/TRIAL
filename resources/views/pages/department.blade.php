@extends('layouts.layout')

@section('title')

departments
@endsection

@section('content')
<div class="container department-page ">
		<div class="row ">
			
	@foreach($data as $departmentItem)


  <div class="col-md-6 col-sm-6 col-xs-12 mb-3">

  <div class="card">
		<div class="card-header bg-white">
		  <h2 class="text-center  w-full ">{{$departmentItem->name}}</h2>
		</div>
			<div class="card-body">
				
	<div class="">

	
	
	      
			<div class="w-50 float-left mr-4">
				<img class="mr-4  w-100 rounded" height="200" width='300' src="{{asset('storage/'.$departmentItem->file_name)}}" style="shape-margin:rem; shape-outside:url('{{asset('storage/'.$departmentItem->file_name)}}');">
			</div>
			<div class="w-100 card-text paragraph">
			
				{{$departmentItem->description}}
			
			</div>
			


	
        
			</div>
		</div>
	</div> 


      {{-- <div class="card">
    <img class="card-img-top" src="{{asset('storage/'.$departmentItem->file_name)}}" alt="mathematis" style="width:100%;">
    <div class="card-body">
      <h4 class="card-title">Department of {{$departmentItem->name}}</h4>
      <p class="card-text">{{$departmentItem->description}}</p>
      <a href="department" class="btn btn-success">Read More</a>
    </div>
  </div> --}}
   </div>
   @endforeach

				
			</div>


			
		</div>
@endsection