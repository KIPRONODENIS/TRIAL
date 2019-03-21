@extends('layouts.layout')


@section('title')

index

@endsection

@section('content')


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
<div>
  <div class="card">
    <div class="card-body">
      <div class="row">
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
        <div class="col-md-4"></div>
      </div>
      
    </div>
  </div>
  
</div>
<div class="col-md-4 col-sm-4 col-xs-12 events" id="events">
  <div class="card">
    <div class=" card-header">
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
      <a  class="btn btn-success" href="#">SEE MORE EVENTS</a>
      
    </div>
  </div>
  
</div>
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
    <div class="card-footer" style="background:green;">
      <a  class="btn btn-success" href="#">READ MORE</a>
      
    </div>
  
  
</div>
  
</div>
</div>
 @if($Ddata)
<div class="dep-all">
<div class="row" id="department" >
  <div class="col-xs-12"><h1>DEPARTMENTS:</h1></div>
  
  <br>
  <br>
  <br>
  <br>
 
</div>


<div class="container departments">
  <div class="row first" id="first">
    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="card">
    <img class="card-img-top" src="{{asset('storage/'.$Ddata['mathematics'])}}" alt="mathematis" style="width:100%;">
    <div class="card-body">
      <h4 class="card-title">Department of mathematics</h4>
      <p class="card-text">{{$Ddata['mdescription']}}</p>
      <a href="department" class="btn btn-success">Read More</a>
    </div>
  </div>
  
   </div>

  <div class="col-md-6 col-sm-6 col-xs-12 lang " >
      <div class="card">
    <img class="card-img-top" src="{{asset('storage/'.$Ddata['languages'])}}" style="width:100%;">
    <div class="card-body">
      <h4 class="card-title">Department of Languages</h4>
      <p class="card-text languages">{{$Ddata['ldescription']}}</p>
      <a href="department" class="btn btn-success">Read More</a>
    </div>
  </div>
    
  </div>

</div>

<div class="row first second">
    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class="card" style="width:100%;">
    <img class="card-img-top" src="{{asset('storage/'.$Ddata['science'])}}" style="width:100%;">
    <div class="card-body">
      <h4 class="card-title">Department of Sciences</h4>
      <p class="card-text">{{$Ddata['sdescription']}}</p>
      <a href="department" class="btn btn-success">Read More</a>
    </div>
  </div>
  
   </div>

  <div class="col-md-4 col-sm-4 col-xs-12" id="humanities">
      <div class="card">
    <img class="card-img-top" src="{{asset('storage/'.$Ddata['humanities'])}}" alt="Humanities" style="width:100%;">
    <div class="card-body">
      <h4 class="card-title">Department of Humanities</h4>
      <p class="card-text">{{$Ddata['hdescription']}}</p>
      <a href="department" class="btn btn-success">Read More</a>
    </div>
  </div>
    
  </div>

</div>
<div class="row first third">
<div class="   col-md-4 col-sm-4 col-xs-12 ">
      <div class="card">
    <img class="card-img-top" src="{{asset('storage/'.$Ddata['ict'])}}" alt="ICT" style="width:100%;">
    <div class="card-body">
      <h4 class="card-title">Department of ICT</h4>
      <p class="card-text">{{$Ddata['idescription']}}</p>
      <a href="department" class="btn btn-success">Read More</a>
    </div>
  </div>
  
   </div>

  <div class="col-md-4 col-sm-4 col-xs-12" id="counseling">
      <div class="card">
    <img class="card-img-top" src="{{asset('storage/'.$Ddata['g&c'])}}" alt="Guiding and counseling" style="width:100%;">
    <div class="card-body">
      <h4 class="card-title">Department of Guiding and counseling</h4>
      <p class="card-text">{{$Ddata['gdescription']}}</p>
      <a href="department" class="btn btn-success">Read More</a>
    </div>
  
    
  </div>
</div>
</div>

<div class="row first third">
<div class="   col-md-4 col-sm-4 col-xs-12 ">
      <div class="card">
    <img class="card-img-top" src="{{asset('storage/'.$Ddata['boarding'])}}" alt="ICT" style="width:100%;">
    <div class="card-body">
      <h4 class="card-title">Boarding Department</h4>
      <p class="card-text">{{$Ddata['bdescription']}}</p>
      <a href="department" class="btn btn-success">Read More</a>
    </div>
  </div>
  
   </div>

  <div class="col-md-4 col-sm-4 col-xs-12" id="counseling">
      <div class="card">
    <img class="card-img-top" src="{{asset('storage/'.$Ddata['examination'])}}" alt="Guiding and counseling" style="width:100%;">
    <div class="card-body">
      <h4 class="card-title">Examination Department</h4>
      <p class="card-text">{{$Ddata['edescription']}}</p>
      <a href="department" class="btn btn-success">Read More</a>
    </div>
  
    
  </div>
</div>
</div>
</div>
</div>
@endif
<div class="row clubs-header">
  
  <h2>CLUBS AND SOCIETIES:</h2>
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
                  <a href="#" class="btn btn-success">Read more</a>
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
                  <a href="#" class="btn btn-success">Read more</a>
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
                  <a href="#" class="btn btn-success">Read more</a>
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
                  <a href="#" class="btn btn-success">Read more</a>
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
                  <a href="#" class="btn btn-success">Read more</a>
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
                  <a href="#" class="btn btn-success">Read more</a>
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
                  <a href="#" class="btn btn-success">Read more</a>
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
                  <a href="#" class="btn btn-success">Read more</a>
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
                  <a href="#" class="btn btn-success">Read more</a>
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
                  <a href="#" class="btn btn-success">Read more</a>
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
                  <a href="#" class="btn btn-success">Read more</a>
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
                  <a href="#" Lclass="btn btn-success">Read more</a>
                </div>
              </div>
            </div>
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
</script>
@endsection