@extends('layouts.layout')

@section('title')

departments
@endsection

@section('content')
<div class="container department-page ">
		<div class="row ">
			
			<div class="col-md-6 col-sm-6 ">
				<div class="card animated bounceInRight">
					<div class="card-header">
						<h3>MATHEMATICS DEPARTMENT</h3>

					</div>
						<div class="card-body">
							<div><img class="rounded-circle" src="{{asset('storage/'.$data['mathematics'])}}" style="width:100%;"></div>
							<P>{{$data['mdescription']}}</p>
							<ul>
							<h3>List of Teachers</h3>
								@foreach($mathematics as $mathematics)
								<li><span class="fa fa-check check"></span>{{ $mathematics->teachers_name}}</li>
								
								@endforeach



							</ul>
						</div>
					</div>
				</div>
			
			
				<div class="col-md-6 col-sm-6 ">
				<div class="card animated bounceInRight">
					<div class="card-header">

						<h3>LANGUAGES DEPARTMENTS</h3>
					</div>
						<div class="card-body">
							<div><img class="rounded-circle" src="{{asset('storage/'.$data['languages'])}}" alt="Languages" style="width:100%;"></div>
							<p>{{$data['ldescription']}}</p>
							<ul>
								<h3>List of Teachers</h3>
								@foreach($languages as $languages)
								<li><span class="fa fa-check check"></span>{{ $languages->teachers_name}}</li>
								
								@endforeach


							</ul>

						</div>
					</div>
				</div>
			
				
			</div>



			<div class="row ">
			
			
			
			<div class="col-md-6 col-sm-6 ">
				<div class="card animated bounceInRight">
					<div class="card-header">
						<h3>SCIENCES DEPARTMENT</h3>

					</div>
						<div class="card-body">
							<div><img class="rounded-circle" src="{{asset('storage/'.$data['science'])}}" alt="mathematis" style="width:100%;"></div>
							<P>{{$data['sdescription']}}</p>
							<ul>
							<h3>List of Teachers</h3>
								@foreach($sciences as $sciences)
								<li><span class="fa fa-check check"></span>{{ $sciences->teachers_name}}</li>
								
								@endforeach


							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-md-6 col-sm-6 ">
				<div class="card animated bounceInRight">
					<div class="card-header">

						<h3>HUMANITIES DEPARTMENTS</h3>
					</div>
						<div class="card-body">
							<div><img class="rounded-circle" src="{{asset('storage/'.$data['humanities'])}}" alt="Languages" style="width:100%;"></div>
							<p>{{$data['hdescription']}}</p>
							<ul>
								<h3>List of Teachers</h3>
								@foreach($humanities as $humanities)
								<li><span class="fa fa-check check"></span>{{ $humanities->teachers_name}}</li>
								
								@endforeach


							</ul>

						</div>
					</div>
				</div>
				
			</div>



			<div class="row">

			
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="card animated bounceInRight">
					<div class="card-header">
						<h3>Guidance & counseling department</h3>

					</div>
						<div class="card-body">
							<div><img class="rounded-circle"  src="{{asset('storage/'.$data['g&c'])}}"  alt="mathematis" style="width:100%;"></div>
							<P>{{$data['gdescription']}}</p>
							<ul>
							<h3>List of Teachers</h3>
								@foreach($gc as $gc)
								<li><span class="fa fa-check check"></span>{{ $gc->teachers_name}}</li>
								
								@endforeach


							</ul>
						</div>
					</div>
				</div>
				
			
				<div class="col-md-6 col-sm-6 col-xs-12 " >
				<div class="card animated bounceInRight">
					<div class="card-header">

						<h3>ICT Department</h3>
					</div>
						<div class="card-body">
							<div><img class="rounded-circle" src="{{asset('storage/'.$data['ict'])}}" alt="Languages" style="width:100%;"></div>
							<p>{{$data['idescription']}}</p>
							<ul>
								<h3>List of Teachers</h3>
								@foreach($ict as $ict)
								<li><span class="fa fa-check check"></span>{{ $ict->teachers_name}}</li>
								
								@endforeach
                          </ul>

						</div>
					</div>
				</div>
				
					
			</div>
			<div class="row">
         

			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="card" rollIn>
					<div class="card-header">
						<h3>Boarding Department</h3>

					</div>
						<div class="card-body">
							<div><img class="rounded-circle" src="{{asset('storage/'.$data['boarding'])}}" alt="mathematis" style="width:100%;"></div>
							<P>{{$data['bdescription']}}</p>
							<ul>
							<h3>List of Teachers</h3>
								@foreach($boarding as $boarding)
								<li><span class="fa fa-check check"></span>{{ $boarding->teachers_name}}</li>
								
								@endforeach



							</ul>
						</div>
					</div>
				</div>
			
				<div class="col-md-6 col-sm-6 col-xs-12 ">
				<div class="card" rollIn>
					<div class="card-header">

						<h3>Examination Department</h3>
					</div>
						<div class="card-body">
							<div><img class="rounded-circle" src="{{asset('storage/'.$data['examination'])}}" alt="Languages" style="width:100%;"></div>
							<p>{{$data['edescription']}}</p>
							<ul>
								<h3>List of Teachers</h3>

								@foreach($examination as $examination)
								<li><span class="fa fa-check check"></span>{{ $examination->teachers_name}}</li>
								
								@endforeach


							</ul>

						</div>
					</div>
				</div>
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
					<img class="img-responsive" src="{{asset('storage/'.$data['games'])}}" width="200px" height="200px";>
					<h4>H.O.D Games and Sports </h4>
					<h5>mr. osoro mteti</h5>
					</div>
				</div>
				<div class=" col-md-6 col-sm-6 col-xs-12">
				<P>{{$data['gamesdescription']}}</P>
			</div>
			</div>
			
			</div>
		</div>
	</div>
@endsection