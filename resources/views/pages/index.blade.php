@extends('layouts.layout')


@section('title')

index

@endsection

@section('content')

@if(count($data)>0)
<div id="carousel" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
    <li data-target="#carousel" data-slide-to="3"></li>
    
  </ul>

  <div class="carousel-inner">
          @foreach($data as $datas)
              @if($datas->id==1)



    <div class="carousel-item active">
      <img class="img-responsive" src="{{asset('storage/'.$datas->file_name)}}" alt="pic " width="100%" height="500">
      <div class="carousel-caption">

       
        <h3>{{$datas->caption_heading }}</h3>
        <p>{{$datas->description }}</p>
       
      </div>   
    </div>
    @endif

     @if($datas->id==2)



    <div class="carousel-item ">
      <img class="img-responsive"  src="{{asset('storage/'.$datas->file_name)}}" alt="pic BOYS" width="100%" height="500">
      <div class="carousel-caption">

       
        <h3>{{$datas->caption_heading }}</h3>
        <p>{{$datas->description }}</p>
       
      </div>   
    </div>
    @endif

     @if($datas->id==3)



    <div class="carousel-item ">
      <img class="img-responsive"  src="{{asset('storage/'.$datas->file_name)}}" alt="KAPSEBET BOYS" width="100%" height="500">
      <div class="carousel-caption">

       
        <h3>{{$datas->caption_heading }}</h3>
        <p>{{$datas->description }}</p>
       
      </div>   
    </div>
    @endif

     @endforeach

      @if($datas->id==4)



    <div class="carousel-item ">
      <img class="img-responsive"  src="{{asset('storage/'.$datas->file_name)}}" alt="KAPSEBET BOYS" width="100%" height="500">
      <div class="carousel-caption">

       
        <h3>{{$datas->caption_heading }}</h3>
        <p>{{$datas->description }}</p>
       
      </div>   
    </div>
    @endif
    
    
   
  </div>

  <a class="carousel-control-prev" href="#carousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#carousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
@else 
<div>PLease UPload the images</div>
@endif
<div>
  <div class=" bg-white">
  @php
$class="w-100";
if(isset($events) && count($events)>0) {
  $class="w-75";
}
  @endphp
    <div class="card-body">
      <div class="row {{$class}} d-flex justify-content-between align-items-center bg-white">
        <div class="col-md-2 col-sm-2 col-xs-12 ">
          <div class="school">
            <a href="about"><span class="fa fa-book icon"></span></a><h1>OUR SCHOOL</h1>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12 ">
          <div class="school">
            <a href="\"><span class="fa fa-pencil-square-o icon"></span></a><h1>EVENTS</h1>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12 ">
          <div class="school">
            <a href="about"><span class="fa fa-home icon"></span></a><h1>STAFF</h1>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12 ">
          <div class="school">
            <span class="fa fa-picture-o icon"></span><h1>GALLERY</h1>
          </div>
        </div>
     
       <div class="col-md-2 col-sm-2 col-xs-12 ">
          <div class="school">
            <span class="fa fa-picture-o icon"></span><h1>ALUMNI</h1>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
@if (isset($events) && count($events)>0)
    <div class="col-md-3 col-sm-4 col-xs-12 events" id="events">
  <div class="card">
    <div class=" card-header bg-green">
      <h3>Upcoming Events</h3>
    </div>
    <div class="card-body">
      @foreach($events as $event)

      <div class="event-item">
        
        <h4>{{$event->event_title}}</h4>
        <p><i class="fa fa-clock-o "></i> {{$event->event_date}}</p>
        <h6>{{$event->start_time}}-{{$event->end_time}}</h6>
      </div>

    @endforeach
        
      
      

    </div>
    <div class="card-footer">
      <a  class="btn  bg-green text-white" href="#">SEE MORE EVENTS</a>
      
    </div>
  </div>
  
</div>
@endif
@if(isset($recents) && count($recents)>0)
<div class="">
  <div class="col-md-4 col-sm-4 col-xs-12 top-stories">
  <div class="card"  style="margin-top: 525px;">
    <div class=" card-header">
      <h3>Recent events</h3>
    </div>

    @foreach($recent as $recents)
    <div class="card-body">
      <div class="story-item">

        <p><i class="fa fa-clock-o"></i> {{$recents->event_date}}</p>
        <h2> {{$recents->event_title}}</h2>
        </div>
        </div>
        @endforeach

          </div>
    <div class="card-footer " >
      <a  class="btn  bg-green text-white" href="#">READ MORE</a>
      
    </div>
  
  
</div>
  
</div>
@endif


 @if($Ddata)
<div class="dep-all px-5">
<div class="row" id="department" >
  <div class="col-xs-12 col-md-12 text-center d-flex justify-content-center ali">
  <h1 class="py-4 text-black">DEPARTMENTS</h1>
  </div>
  
 

</div>

<div class="departments container">
  <div class="row first" id="first">
    @foreach($Ddata as $departmentItem)
  <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="card">
    <img class="card-img-top" src="{{asset('storage/'.$departmentItem->file_name)}}" alt="mathematis" style="width:100%;">
    <div class="card-body">
      <h4 class="card-title">{{$departmentItem->name}}</h4>
      <p class="card-text">{{$departmentItem->description}}</p>
      <a href="department" class="btn bg-green text-white">Read More</a>
    </div>
  </div>
   </div>
   @endforeach
</div>

</div>
</div>
@endif
<div class="row clubs-header d-flex justify-content-center align-items-center w-100 text-center">
  
  <div class="col-xs-12 col-md-12 text-center d-flex justify-content-center ali">
  <h1 class="py-4">CLUBS AND SOCIETIES:</h1>
  </div>
</div>
<div class="row ">
  <div class="container" >

  <div class="owl-carousel owl-theme clubs">
            <div class="item">
              <div class="card">
                <div class="card-header" style="background:url(images/journalism.jpg);">
                  <h3>JOUNALISM CLUB</h3>

                </div>
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet, pro ea oportere rationibus cotidieque, idque dictas temporibus vix ne. Suas sanctus senserit ne duo. Alia sadipscing sea ea, ei essent laoreet albucius vel</p>
                </div>
                <div class="card-footer">
                  <a href="#" class="btn  bg-green text-white">Read more</a>
                </div>
              </div>
            </div>
            <div class="item">
               <div class="card">
                <div class="card-header" style="background:url(images/debate.jpg);">
                  <h3>DEBATE CLUB</h3>

                </div>
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet, pro ea oportere rationibus cotidieque, idque dictas temporibus vix ne. Suas sanctus senserit ne duo. Alia sadipscing sea ea, ei essent laoreet albucius vel</p>
                </div>
                <div class="card-footer">
                  <a href="#" class="btn  bg-green text-white">Read more</a>
                </div>
              </div>
            </div>
            <div class="item">
               <div class="card">
                <div class="card-header" style="background:url(images/wildlife.jpg);">
                  <h3>WILDLIFE CLUB</h3>

                </div>
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet, pro ea oportere rationibus cotidieque, idque dictas temporibus vix ne. Suas sanctus senserit ne duo. Alia sadipscing sea ea, ei essent laoreet albucius vel</p>
                </div>
                <div class="card-footer">
                  <a href="#" class="btn  bg-green text-white">Read more</a>
                </div>
              </div>
            </div>
            <div class="item">
               <div class="card">
                <div class="card-header" style="background:url(images/nacada.jpg);">
                  <h3>NACADA CLUB</h3>

                </div>
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet, pro ea oportere rationibus cotidieque, idque dictas temporibus vix ne. Suas sanctus senserit ne duo. Alia sadipscing sea ea, ei essent laoreet albucius vel</p>
                </div>
                <div class="card-footer">
                  <a href="#" class="btn  bg-green text-white">Read more</a>
                </div>
              </div>
            </div>
            <div class="item">
               <div class="card">
                <div class="card-header" style="background:url(images/drama.jpg);">
                  <h3>DRAMA CLUB</h3>

                </div>
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet, pro ea oportere rationibus cotidieque, idque dictas temporibus vix ne. Suas sanctus senserit ne duo. Alia sadipscing sea ea, ei essent laoreet albucius vel</p>
                </div>
                <div class="card-footer">
                  <a href="#" class="btn  bg-green text-white">Read more</a>
                </div>
              </div>
            </div>
            <div class="item">
               <div class="card">
                <div class="card-header" style="background:url(images/mathclub.jpg);">
                  <h3>MATHEMATICS CLUB</h3>

                </div>
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet, pro ea oportere rationibus cotidieque, idque dictas temporibus vix ne. Suas sanctus senserit ne duo. Alia sadipscing sea ea, ei essent laoreet albucius vel</p>
                </div>
                <div class="card-footer">
                  <a href="#" class="btn  bg-green text-white">Read more</a>
                </div>
              </div>
            </div>
            <div class="item">
               <div class="card">
                <div class="card-header" style="background:url(images/science2.jpg);">
                  <h3>SCIENCE CLUB</h3>

                </div>
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet, pro ea oportere rationibus cotidieque, idque dictas temporibus vix ne. Suas sanctus senserit ne duo. Alia sadipscing sea ea, ei essent laoreet albucius vel</p>
                </div>
                <div class="card-footer">
                  <a href="#" class="btn  bg-green text-white">Read more</a>
                </div>
              </div>
            </div>
            <div class="item">
               <div class="card">
                <div class="card-header" style="background:url(images/environmental.jpg);">
                  <h3>ENVIRONMENTAL CLUB</h3>

                </div>
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet, pro ea oportere rationibus cotidieque, idque dictas temporibus vix ne. Suas sanctus senserit ne duo. Alia sadipscing sea ea, ei essent laoreet albucius vel</p>
                </div>
                <div class="card-footer">
                  <a href="#" class="btn  bg-green text-white">Read more</a>
                </div>
              </div>
            </div>
            <div class="item">
               <div class="card">
                <div class="card-header" style="background:url(images/guidance.jpg);">
                  <h3>GUIDING AND COUNSELING</h3>

                </div>
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet, pro ea oportere rationibus cotidieque, idque dictas temporibus vix ne. Suas sanctus senserit ne duo. Alia sadipscing sea ea, ei essent laoreet albucius vel</p>
                </div>
                <div class="card-footer">
                  <a href="#" class="btn  bg-green text-white">Read more</a>
                </div>
              </div>
            </div>
            <div class="item">
               <div class="card">
                <div class="card-header" style="background:url(images/cu.jpg);">
                  <h3>CHRISTIAN UNION CLUB</h3>

                </div>
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet, pro ea oportere rationibus cotidieque, idque dictas temporibus vix ne. Suas sanctus senserit ne duo. Alia sadipscing sea ea, ei essent laoreet albucius vel</p>
                </div>
                <div class="card-footer">
                  <a href="#" class="btn  bg-green text-white">Read more</a>
                </div>
              </div>
            </div>
            <div class="item">
               <div class="card">
                <div class="card-header" style="background:url(images/ycs.jpg);">
                  <h3>YCS CLUB</h3>

                </div>
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet, pro ea oportere rationibus cotidieque, idque dictas temporibus vix ne. Suas sanctus senserit ne duo. Alia sadipscing sea ea, ei essent laoreet albucius vel</p>
                </div>
                <div class="card-footer">
                  <a href="#" class="btn  bg-green text-white">Read more</a>
                </div>
              </div>
            </div>
            <div class="item">
               <div class="card">
                <div class="card-header" style="background:url(images/sda.jpg);">
                  <h3>SDA CLUB</h3>

                </div>
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet, pro ea oportere rationibus cotidieque, idque dictas temporibus vix ne. Suas sanctus senserit ne duo. Alia sadipscing sea ea, ei essent laoreet albucius vel</p>
                </div>
                <div class="card-footer">
                  <a href="#" class="btn  bg-green text-white">Read more</a>
                </div>
              </div>
            </div>
          </div>
</div>

</div>


<div class=" w-100">
<div class="testimonials-wrap container">
	<div class="">
        <div class="heading-section">
            <span class="sub-heading text-green">Alumni</span>
            <h2>Alumni Stories & Feedback</h2>
        </div>
        <div class="carousel-testimonial owl-carousel">
            <div class="item">
                <div class="testimonial-box d-flex">
                    <div class="user-img" style="background-image: url(https://randomuser.me/api/portraits/men/82.jpg)">
                    </div>
                    <div class="text pl-4">
                        <span class="quote"><i class="fa fa-quote-left"></i></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Mark Huff</p>
                        <span class="position">Businesswoman</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-box d-flex">
                    <div class="user-img" style="background-image: url(https://randomuser.me/api/portraits/men/83.jpg)">
                    </div>
                    <div class="text pl-4">
                        <span class="quote"><i class="fa fa-quote-left"></i></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Rodel Golez</p>
                        <span class="position">Businesswoman</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-box d-flex">
                    <div class="user-img" style="background-image: url(https://randomuser.me/api/portraits/men/84.jpg)">
                    </div>
                    <div class="text pl-4">
                        <span class="quote"><i class="fa fa-quote-left"></i></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Ken Bosh</p>
                        <span class="position">Businesswoman</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-box d-flex">
                    <div class="user-img" style="background-image: url(https://randomuser.me/api/portraits/men/85.jpg)">
                    </div>
                    <div class="text pl-4">
                        <span class="quote"><i class="fa fa-quote-left"></i></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Racky Henderson</p>
                        <span class="position">Father</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-box d-flex">
                    <div class="user-img" style="background-image: url(https://randomuser.me/api/portraits/men/86.jpg)">
                    </div>
                    <div class="text pl-4">
                        <span class="quote"><i class="fa fa-quote-left"></i></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Henry Dee</p>
                        <span class="position">Businesswoman</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-box d-flex">
                    <div class="user-img" style="background-image: url(https://randomuser.me/api/portraits/men/87.jpg)">
                    </div>
                    <div class="text pl-4">
                        <span class="quote"><i class="fa fa-quote-left"></i></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Mark Huff</p>
                        <span class="position">Businesswoman</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-box d-flex">
                    <div class="user-img" style="background-image: url(https://randomuser.me/api/portraits/men/88.jpg)">
                    </div>
                    <div class="text pl-4">
                        <span class="quote"><i class="fa fa-quote-left"></i></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Rodel Golez</p>
                        <span class="position">Businesswoman</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-box d-flex">
                    <div class="user-img" style="background-image: url(https://randomuser.me/api/portraits/men/89.jpg)">
                    </div>
                    <div class="text pl-4">
                        <span class="quote"><i class="fa fa-quote-left"></i></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Ken Bosh</p>
                        <span class="position">Businesswoman</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-box d-flex">
                    <div class="user-img" style="background-image: url(https://randomuser.me/api/portraits/men/90.jpg)">
                    </div>
                    <div class="text pl-4">
                        <span class="quote"><i class="fa fa-quote-left"></i></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Racky Henderson</p>
                        <span class="position">Father</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-box d-flex">
                    <div class="user-img" style="background-image: url(https://randomuser.me/api/portraits/men/91.jpg)">
                    </div>
                    <div class="text pl-4">
                        <span class="quote"><i class="fa fa-quote-left"></i></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Henry Dee</p>
                        <span class="position">Businesswoman</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-box d-flex">
                    <div class="user-img" style="background-image: url(https://randomuser.me/api/portraits/men/92.jpg)">
                    </div>
                    <div class="text pl-4">
                        <span class="quote"><i class="fa fa-quote-left"></i></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Mark Huff</p>
                        <span class="position">Businesswoman</span>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
    <div class="cta text-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <h2> Become Part of  Alumni Community & Projects?</h2>
                    <p>share your success story with us and inspire others</p>
                </div>
                <div class="col-sm-3 text-left text-sm-right">
                    <a href="https://www.totoprayogo.com" target="_blank" class="btn btn-lg btn-outline-light">Register  Now</a>
                </div>
                
            </div>
        </div>
    </div>
</div>

<div class="bg-info contact4 overflow-hiddedn position-relative">
  <!-- Row  -->
  <div class="row no-gutters">
    <div class="container">
      <div class="col-lg-6 contact-box mb-4 mb-md-0">
        <div class="">
          <h1 class="title font-weight-light text-white mt-2">Contact Us</h1>
          <form class="mt-3">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group mt-2">
                  <input class="form-control text-white" type="text" placeholder="name">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group mt-2">
                  <input class="form-control text-white" type="email" placeholder="email address">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group mt-2">
                  <textarea class="form-control text-white" rows="3" placeholder="message"></textarea>
                </div>
              </div>
              <div class="col-lg-12 d-flex align-items-center mt-2">
                <button type="submit" class="btn bg-white text-inverse px-3 py-2"><span> Submit</span></button>
                <span class="ml-auto text-white align-self-center"><i class="fa fa-phone mr-2"></i>251 546 9442</span>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-6 right-image p-r-0">


      <iframe class="h-100 rounded-xl" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.784555092334!2d35.13040691473371!3d0.23571996420729785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x178060b186b52b23%3A0x3076e8947a1f3819!2sSt%20Joseph%20Chepterit%20Girls%20High%20School!5e0!3m2!1sen!2ske!4v1637570587494!5m2!1sen!2ske"
        width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen data-aos="fade-left" data-aos-duration="3000"></iframe>
    </div>
  </div>
</div>

@endsection


@section('script')


<script type="text/javascript">
  var owl = $('.clubs');
owl.owlCarousel({
    loop:true,
    margin:10,
    responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items:3,
                    nav: true
                  },

                  1000: {
                    items: 4,
                    nav: true,
                    loop: true,
                    margin: 20
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


$('.carousel-testimonial').owlCarousel({
    loop:true,
    margin:0,
    items:3,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:2,
            nav:true,
            loop:false
        },
    
    }
})
</script>
@endsection