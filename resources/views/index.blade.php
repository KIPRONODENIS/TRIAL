@extends('layouts.layout')



@section('body')

		<div class="row">
			<div class="col-md-6 ">
				<a href="checkin"><img src="images/checkin.jpg" class="img-rounded"></a>
				<h4>CHECK IN</h4>
			</div>
			<div class="col-md-6 ">
				<a href="checkout"><img src="images/checkin1.jpg" class="img-rounded"></a>
				<h4>CHECK OUT</h4>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6  ">
				<a href="statistics"><img src="images/statistics.jpg" class="img-rounded"></a>
				<h4>STATISTICS</h4>
			</div>
			<div class="col-md-6  ">
				<a href="search"><img src="Search.jpg" class="img-rounded"></a>
				<h4>SEARCH</h4>
			</div>
		</div>
		<p style="padding-top: 20px; font-size: 18px;">
		<a href="/registration">New Registration</a>
		</p>
@endsection