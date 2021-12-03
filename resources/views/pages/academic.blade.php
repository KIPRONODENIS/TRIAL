@extends('layouts.layout')

@section('title')

academics
@endsection

@section('content')
<div class="row parallax" style="background-image: url(images/library.jpg) ;">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h1>SCHOOL ACADEMICS</h1>
			
		</div>
	</div>

	<div class='container mt-5 m-auto'>
	<div class="mt-5 flex justify-center align-items-center bg-white rounded ">
	  <div class="col-xs-12 col-md-12 text-center d-flex flex-column justify-content-center align-items-center">
      <h4 class="pt-4 pb-2 text-black text-uppercase">Our Vision</h4>
	   <p class=" text-black w-75 mx-auto">To be a Girl's school of choice in academic excellence, character and spiritial building</p>
	   <p>Guided by core values which are: Service, integrity, Professionalism, and Teamwork</p>
      </div>

	   <div class="col-xs-12 col-md-12 text-center d-flex flex-column justify-content-center align-items-center">
      <h4 class="pt-4 pb-2 text-black text-uppercase">Our Mission</h4>
	   <p class=" text-black w-75 mx-auto">To provide conducive environment for a quality education and developement of effective career, character and spiritual being of students</p>
      </div>
  
	</div>
	</div>
	<div class="container subjects">
		<div class="card">
			<div class="card-body subject-body">
				<div class="row">
					<div class="w-100">
						
						<div class="card">
							<div class="card-body">
								<h4>SUBJECTS OFFERED 
									<span class="float-right">{{isset($subjects) ? count($subjects) : 0 }}</span>
								</h4>
								
							</div>
						</div>

						<div class="">
							<div class=" w-100">
								
								<div  class="w-100">
									<ul class="col d-flex flex-wrap justify-between">
										@foreach($subjects as $subject)
										<li class="card col-12 col-lg-auto m-2 px-5 w-1/3 py-2 shadow flex space-x-2"> 
										<span class="fa fa-check check m-auto mb-1"></span>
										<span class="whitespace-no-wrap text-center">{{$subject->name}}</span></li>
										@endforeach

									</ul>
								</div>

								
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</div>
	<div class="row ">
	
  <div class="col-xs-12 col-md-12 text-center d-flex justify-content-center ali">
  <h1 class="py-4 text-black">SCHOOL UNIFORMS</h1>
  </div>
</div>
<div class="row " id="uniform">
	<div class="container uniforms" >

	<div class="owl-carousel owl-theme clubs">

 @foreach($uniformtype as $uniformtype )


            <div class="item">
              <div class="card uniform-card">
            
                  <img class="img-responsive card-img-top"  src="{{asset('storage/'.$uniformtype->file_name)}}">
              		
              	
              	<div class="card-body">
              		<p>{{$uniformtype->description }} </p>
              	</div>
              	<div class="card-footer ">
              		<p>{{$uniformtype->name}}</p>
              	</div>
              </div>
            </div>
@endforeach

           
            
            
           
            
         
            
          </div>
</div>
</div>
<div class="container " >
  <div class="col-xs-12 col-md-12 text-center d-flex justify-content-center ali">
  <h1 class="py-4 text-black">Fees</h1>
  </div>
	<div class="card fees-body mb-5">
		<div class="card-body">
			<div class="row">

        @foreach($fees as $fees)
        @if($fees->id==1)
				<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="card">
						<div class="card-header">
							<h3>FORM 1</h3>
						</div>
						<div class="card-body">
							<h4><span class="term">Term 1:</span> ksh.{{$fees->term1}}</h4>
							<h4><span class="term">Term 2:</span> ksh.{{$fees->term2}}</h4>
							<h4><span class="term">Term 3:</span> ksh.{{$fees->term3}}</h4>
						</div>
					</div>
				</div>
         @endif
         @if($fees->id==2)
				<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="card">
						<div class="card-header">
							<h3>FORM 2</h3>
						</div>
						<div class="card-body">
							<h4><span class="term">Term 1:</span> ksh.{{$fees->term1}}</h4>
							<h4><span class="term">Term 2:</span> ksh.{{$fees->term2}}</h4>
							<h4><span class="term">Term 3:</span> ksh.{{$fees->term3}}</h4>
						</div>
					</div>
				</div>
        @endif
        @if($fees->id==3)
				<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="card">
						<div class="card-header">
							<h3>FORM 3</h3>
						</div>
						<div class="card-body">
							<h4><span class="term">Term 1:</span> ksh.{{$fees->term1}}</h4>
							<h4><span class="term">Term 2:</span> ksh.{{$fees->term2}}</h4>
							<h4><span class="term">Term 3:</span> ksh.{{$fees->term3}}</h4>
						</div>
					</div>
				</div>
        @endif
        @if($fees->id==4)
				<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="card">
						<div class="card-header">
							<h3>FORM 4</h3>
						</div>
						<div class="card-body">
              <h4><span class="term">Term 1:</span> ksh.{{$fees->term1}}</h4>
              <h4><span class="term">Term 2:</span> ksh.{{$fees->term2}}</h4>
              <h4><span class="term">Term 3:</span> ksh.{{$fees->term3}}</h4>
            </div>
					</div>
				</div>
        @endif
        @endforeach
			</div>
		</div>
	</div>
</div>
<div class="container-fluid awards" style="background-image: url(images/cup2.jpg); ">
	  <div class="col-xs-12 col-md-12 text-center d-flex justify-content-center ali">
  <h1 class="py-4 text-black">Academic Awards</h1>
  </div>
	<div class="row">
		<div class="awards-body">
			<ul>
				<li><span class="fa fa-check check"></span>Science Contest cup 2018</li>
				<li><span class="fa fa-check check"></span>Mathematics cup 2017 </li>
				<li><span class="fa fa-check check"></span>Science Fair 2016</li>
			</ul>
		</div>
	</div>
</div>

@endsection

@section('script')

<script type="text/javascript">
		var owl = $('.owl-carousel');
owl.owlCarousel({
    
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:true
        },
        1000:{
            items:4,
            nav:true,
            loop:true
        }
    },
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
	</script>
	@endsection