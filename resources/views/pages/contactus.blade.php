
@extends('layouts.layout')

@section('title')

contact us
@endsection

@section('content')
<div class="container contact-us">
	<h1>CONTACT US</h1>
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12">
			@if (count($errors)>0)
			@foreach($errors->all() as $error)
			<p class="alert alert-danger">{{$error}}</p>
			@endforeach
			
			@endif

			@if(session()->has('message'))

			<p class="alert alert-success">{{session()->get('message')}}</p>

			@endif




			<form action="/contactus" method="post">

				{{csrf_field()}}
				<div class="form-row">
					<div class="form-group col-md-6 col-sm-6 col-xs-12">
						<input type="text" name="name" class="form-control" placeholder="Name">
					</div>
					<div class="form-group col-md-6 col-sm-6 col-xs-12">
						<input type="text" name="phone" class="form-control" placeholder="phone">
					</div>
				</div>
				<div class="form-group">
					<input type="text" name="subject" class="form-control" placeholder="Subject">
				</div>
				<div class="form-group">
					<textarea name="textarea" class="form-control" rows="5"></textarea>
				</div>
				<div class="form-group pull-right">
					<input type="submit" class="btn btn-success" value="Submit" name="submit">
				</div>
			</form>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12 contact-info">
			<div class="card">
				<div class="card-header">
					<h4>WARENG HIGH SCHOOL</h4>
					<h6>"Elimu Yajenga"</h6>
				</div>
				<div class="card-body">
					<p>Address:P.O BOX 6910-30100</p>
					<p>Tel:+254-834-564</p>
					<p>Phone:020-343-545</p>
				</div>
			</div>
		</div>
	</div>
</div> 

@endsection





      