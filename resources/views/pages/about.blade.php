@extends('layouts.layout')

@section('title')

about us
@endsection

@section('content')





<div class="container aboutus">
		<h1>OUR HISTORY</h1>
		<div class="card">
			<div class="card-body">
				
	<div class="row">

		@foreach($management as $managements)
	
	       @if($managements->id==1)
			<div class="col-md-6 col-sm-6 col-xs-12 ">
				<img src="{{asset('storage/'.$managements->file_name)}}">
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 ">
				{{$managements->description}}
			</div>
			@endif
          @endforeach
			</div>
		</div>
	</div> 
	</div>
	<div class="container management">
		<h1>MANAGEMENT</h1>
		<div class="card mngt-body">
			<div class="card-body ">

				<div class="row">
					@foreach($management as $managements)
	
	       @if($managements->id==2)
					<div class="col-md-6 col-sm-6 col-xs-12 mngt-card">
						<div class="card">
							<div class="card-body">
								<p> <div class="name"><img src="{{asset('storage/'.$managements->file_name)}}" class="rounded-circle " width="200px" height="200px"><div>The Principal</div></div>{{$managements->description}}</p>
							</div>
						</div>
					</div>
					@endif

					@if($managements->id==3)
					<div class="col-md-6 col-sm-6 col-xs-12 mngt-card">
						<div class="card">
							<div class="card-body">
								<p> <div  class="name"><img src="{{asset('storage/'.$managements->file_name)}}" class="rounded-circle " width="200px" height="200px"><div>Board Of Governors</div></div>
								{{$managements->description}}</p>
							</div>
						</div>
					</div>
					@endif
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<div class="container management">
		<div class="card mngt-body">
			<div class="card-body ">
				<div class="row">

								@foreach($management as $managements)
								@if($managements->id==4)
					<div class="col-md-6 col-sm-6 col-xs-12 mngt-card">
						<div class="card">
							<div class="card-body">
								<p> <div class="name"><img src="{{asset('storage/'.$managements->file_name)}}" class="rounded-circle " width="200px" height="200px"><div>The Deputy Principal</div></div>{{$managements->description}}</p>
							</div>
						</div>

					</div>

					@endif

					@if($managements->id==5)
					<div class="col-md-6 col-sm-6 col-xs-12 mngt-card">
						<div class="card">
							<div class="card-body">
								<p> <div  class="name"><img src="{{asset('storage/'.$managements->file_name)}}" class="rounded-circle " width="200px" height="200px"><div>Parent Teachers Association</div></div>{{$managements->description}}</p>
							</div>
						</div>
					</div>
					@endif
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<div class="container management"> 
		<h1>STUDENT LEADERS</h1>
		<div class="card mngt-body">
			<div class="card-body ">
				<div class="row">
					@foreach($management as $managements)
	
	       @if($managements->id==6)


					<div class="col-md-4 col-sm-4 col col-xs-12 mngt-card">
						<div class="card">
							<div class="card-body">
								<p> <div class="name"><img src="{{asset('storage/'.$managements->file_name)}}" class="rounded-circle " width="200px" height="200px"><div>captain</div></div>{{$managements->description}}</p>
							</div>
						</div>
					</div>

					@endif

					@if($managements->id==7)
					<div class="col-md-4 col-sm-4 col col-xs-12 mngt-card">
						<div class="card">
							<div class="card-body">
								<p> <div class="name"><img src="{{asset('storage/'.$managements->file_name)}}" class="rounded-circle " width="200px" height="200px"><div>Deputy captain</div></div>{{$managements->description}}</p>
							</div>
						</div>
					</div>
					@endif

					@if($managements->id==8)
					<div class="col-md-4 col-sm-4 col-xs-12 mngt-card">
						<div class="card">
							<div class="card-body">
								<p> <div  class="name"><img src="{{asset('storage/'.$managements->file_name)}}" class="rounded-circle " width="200px" height="200px"><div>Student leaders</div></div>{{$managements->description}}</p>
							</div>
						</div>
					</div>
					@endif

					@endforeach
				</div>
				
			</div>
		</div>
	</div>
	<div class="container staff">
		<h1>STAFF</h1>
		<div class="card">
			<div class="card-body staff-body">
				<div class="row">

					@foreach($management as $managements)
	
	       @if($managements->id==9)

				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="card">
						<img class="card-img-top" src="{{asset('storage/'.$managements->file_name)}}">
						<div class="card-body">
							<h3>TEACHING STAFF </h3>
						</div>
					</div>
				</div>
				@endif
				 @if($managements->id==10)
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="card">
						<img class="card-img-top" src="{{asset('storage/'.$managements->file_name)}}">
						<div class="card-body">
							<h3>NON-TEACHING STAFF </h3>
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