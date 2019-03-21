
@extends('layouts.layout')

@section('title')

contact us
@endsection

@section('content')

@if (count($errors)>0)
			@foreach($errors->all() as $error)
			<p class="alert alert-danger" style="margin-left:30%;margin-top:20px;width:20% ">{{$error}}</p>
			@endforeach
			
			@endif


	@if(session()->has('message'))
<p class="alert-danger" style="margin-left:32%;margin-top:20px;width:20% ">{{session()->get('message')}}</p>

	@endif

<div class="container login1">
	<h1>ADMIN LOGIN </h1>

	
	<div class="row">
	
			
			
   <div class="card" style="height:280px;width: 250px; background:#fff;position:relative; margin-left: 30px;">
			<form action="/login" method="post">

				{{csrf_field()}}
				
				<div class="form-group"  style="margin-top: 40px">
					<input type="text" name="username" class="form-control" placeholder="Enter Username">
				</div>

				<div class="form-group" style="margin-top: 40px">
					<input type="password" name="password" class="form-control" placeholder="Enter Password">
				</div>
				
				
				<div class="form-group" style="position:relative;margin-left: 30%; margin-top: 50px;">
					<input type="submit" class="btn btn-success" value="Submit" name="submit">
				</div>
			</form>
		</div>
		
	</div>
</div> 

@endsection





      