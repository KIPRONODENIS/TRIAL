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
	<div class="container subjects">
		<div class="card">
			<div class="card-body subject-body">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						
						<div class="card">
							<div class="card-body">
								<h1>SUBJECTS OFFERED</h1>
								<div class="subjects-no">
									<p>12</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						
						<div class="card">
							<div class="card-body subjects-list">
								<h2> LIST OF SUBJECTS</h2>
								<div class="pull-right">
									<ul>
										<li> <span class="fa fa-check check"></span>English</li>
										<li><span class="fa fa-check check"></span>Kiswahili</li>
										<li><span class="fa fa-check check"></span>C.R.E</li>
										<li><span class="fa fa-check check"></span>Physics</li>
										<li><span class="fa fa-check check"></span>Chemistry</li>
										<li><span class="fa fa-check check"></span>biology</li>
									</ul>
								</div>
								 <div>
									<ul>
										<li><span class="fa fa-check check"></span>Agriculture</li>
										<li><span class="fa fa-check check"></span>Business Studies</li>
										<li><span class="fa fa-check check"></span>History</li>
										<li><span class="fa fa-check check"></span>Geography</li>
										<li><span class="fa fa-check check"></span>mathematics</li>
										<li><span class="fa fa-check check"></span>Computer Studies</li>
									</ul>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row clubs-header">
	
	<h2>SCHOOL UNIFORMS:</h2>
</div>
<div class="row " id="uniform">
	<div class="container uniforms" >

	<div class="owl-carousel owl-theme clubs">

 @foreach($uniformtype as $uniformtype )


            <div class="item">
              <div class="card">
            
                  <img class="img-responsive card-img-top"  src="{{asset('storage/'.$uniformtype->file_name)}}">
              		
              	
              	<div class="card-body">
              		<p>{{$uniformtype->description }} </p>
              	</div>
              	<div class="card-footer">
              		<p>SCHOOL TIE</p>
              	</div>
              </div>
            </div>
@endforeach

           
            
            
           
            
         
            
          </div>
</div>
</div>
<div class="container fees"  id="fees">
	<h1>SCHOOL FEES</h1>
	<div class="card fees-body">
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
	<h1>ACADEMIC AWARDS</h1>
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