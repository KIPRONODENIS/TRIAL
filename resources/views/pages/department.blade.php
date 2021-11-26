@extends('layouts.layout')

@section('title')

departments
@endsection

@section('content')
<div class="container department-page ">
		<div class="row ">
			
	@foreach($data as $departmentItem)
  <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="card">
    <img class="card-img-top" src="{{asset('storage/'.$departmentItem->file_name)}}" alt="mathematis" style="width:100%;">
    <div class="card-body">
      <h4 class="card-title">Department of {{$departmentItem->name}}</h4>
      <p class="card-text">{{$departmentItem->description}}</p>
      <a href="department" class="btn btn-success">Read More</a>
    </div>
  </div>
   </div>
   @endforeach

				
			</div>


			
		</div>

		<div class="container games">
			
			<div class="row">
				<div class="card"rollIn>
				<div class="card-header">
					<h3>Games & Sports Department</h3>
				</div>
				<div class="card-body">
			     <div class="row scroll-animations">
				
				<div class="col-md-3 col-sm-3 col-xs-6 animated bounce">
					<div> <img class="img-responsive" src="images/football.jpg" alt="ball">
					</div>
				</div>
					<div class="col-md-3 col-sm-3 col-xs-6 animated bounce">
					<div> <img class="img-responsive" src="images/rugby.jpg">
					</div>
				</div>
					<div class="col-md-3 col-sm-3 col-xs-6 animated bounce">
					<div> <img class="img-responsive" src="images/volley.jpg">
					</div>
				</div>
					<div class="col-md-3 col-sm-3 col-xs-6 animated bounce">
					<div> <img class="img-responsive" src="images/hockey.jpg">
					</div>
				</div>
				</div>
			</div>
			<div class="row hod">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="card">
					
					<h4>H.O.D Games and Sports </h4>
					<h5>mr. osoro mteti</h5>
					</div>
				</div>
				<div class=" col-md-6 col-sm-6 col-xs-12">
				<p>
				eadable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


				</p>
			</div>
			</div>
			
			</div>
		</div>
	</div>
@endsection