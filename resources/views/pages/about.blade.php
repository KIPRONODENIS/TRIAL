@extends('layouts.layout')

@section('title')

about us
@endsection

@section('content')





<div class="container aboutus mt-3">
		@foreach($management as $managements)
		 @if($managements->name==='history')
		<div class="card">
		<div class="card-header bg-white">
		  <h2 class="text-center  w-full ">Our History</h2>
		</div>
			<div class="card-body">
				
	<div class="">

	
	
	      
			<div class="w-50 float-left mr-4">
				<img class="mr-4 rounded" src="{{asset('storage/'.$managements->file_name)}}" style="shape-margin:rem; shape-outside:url('{{asset('storage/'.$managements->file_name)}}');">
			</div>
			<div class="w-100 card-text paragraph">
			
				{{$managements->description}}
			
			</div>
			


	
        
			</div>
		</div>
	</div> 
@endif


 @if($managements->name==='principal')
		<div class="card mt-2">
		<div class="card-header bg-white">
		  <h2 class="text-center  w-full ">The Principal's Remarks</h2>
		</div>
			<div class="card-body">
				
	<div class="">

	
	
	      
			<div class="name float-right ml-4">
				<img class="mr-4  shape-outside-image img-responsive"  width="300" height="300" src="{{asset('storage/'.$managements->file_name)}}" style="shape-margin:rem;  shape-outside:url('{{asset('storage/'.$managements->file_name)}}');">
			</div>
			<div class="w-100 card-text paragraph">
			
				{{$managements->description}}
			
			</div>
			


	
        
			</div>
		</div>
	</div> 
@endif


@if($managements->name==='bog')
		<div class="card mt-2">
		<div class="card-header bg-white">
		  <h2 class="text-center  w-full ">The Board of Governors Remarks</h2>
		</div>
			<div class="card-body">
				
	<div class="">

	
	
	      
			<div class="name float-left mr-4">
				<img class="mr-4  shape-outside-image img-responsive"  width="300" height="300" src="{{asset('storage/'.$managements->file_name)}}" style="shape-margin:rem;  shape-outside:url('{{asset('storage/'.$managements->file_name)}}');">
			</div>
			<div class="w-100 card-text paragraph">
			
				{{$managements->description}}
			
			</div>
			


	
        
			</div>
		</div>
	</div> 
@endif

@if($managements->name==='dprincipal')
		<div class="card mt-2">
		<div class="card-header bg-white">
		  <h2 class="text-center  w-full ">The Deputy Principal's Remarks</h2>
		</div>
			<div class="card-body">
				
	<div class="">

	
	
	      
			<div class="name float-right ml-4">
				<img class="mr-4  shape-outside-image img-responsive"  width="300" height="300" src="{{asset('storage/'.$managements->file_name)}}" style="shape-margin:rem;  shape-outside:url('{{asset('storage/'.$managements->file_name)}}');">
			</div>
			<div class="w-100 card-text paragraph">
			
				{{$managements->description}}
			
			</div>
			


	
        
			</div>
		</div>
	</div> 
@endif

@if($managements->name==='pta')
		<div class="card mt-2">
		<div class="card-header bg-white">
		  <h2 class="text-center  w-full ">The PTA's Remarks</h2>
		</div>
			<div class="card-body">
				
	<div class="">

	
	
	      
			<div class="name float-left mr-4">
				<img class="mr-4  shape-outside-image img-responsive"  width="300" height="300" src="{{asset('storage/'.$managements->file_name)}}" style="shape-margin:rem;  shape-outside:url('{{asset('storage/'.$managements->file_name)}}');">
			</div>
			<div class="w-100 card-text paragraph">
			
				{{$managements->description}}
			
			</div>
			


	
        
			</div>
		</div>
	</div> 
@endif

  @endforeach
	</div>
	
	<div class="container bg-body pt-5"> 
		<h3 class="text-center my-2">STUDENT LEADERS</h3>
		<div class=" bg-body mngt-body">
			<div class="card-body ">
				<div class="row">
					@foreach($management as $managements)
	
	       @if($managements->name==='captain')


					<div class="col-md-4 col-sm-4 col col-xs-12 mngt-card">
						<div class="card">
							<div class="card-body d-flex flex-column justify-content-center align-items-center">
							<div class="name">
								<img src="{{asset('storage/'.$managements->file_name)}}" class="rounded-circle m-auto" width="200px" height="200px">
								<div class="my-2 text-center">captain</div>
								</div>
								<p> {{$managements->description}}</p>
							</div>
						</div>
					</div>

		    @endif

					@if($managements->name==='deputycaptain')
					<div class="col-md-4 col-sm-4 col col-xs-12 mngt-card">
						<div class="card">
							<div class="card-body d-flex flex-column justify-content-center align-items-center">
							<div class="name">
								<img src="{{asset('storage/'.$managements->file_name)}}" class="rounded-circle m-auto" width="200px" height="200px">
								<div class="my-2 text-center">Deputy Captain</div>
								</div>
								<p> {{$managements->description}}</p>
							</div>
						</div>
					</div>
					@endif

					@if($managements->name==='studentleaders')
					<div class="col-md-4 col-sm-4 col col-xs-12 mngt-card">
						<div class="card">
							<div class="card-body d-flex flex-column justify-content-center align-items-center">
							<div class="name">
								<img src="{{asset('storage/'.$managements->file_name)}}" class="rounded-circle  m-auto" width="200px" height="200px">
								<div class="my-2 text-center">Student Leaders</div>
								</div>
								<p> {{$managements->description}}</p>
							</div>
						</div>
					</div>
					@endif

					@endforeach
				</div>
				
			</div>
		</div>
	</div>
@endsection