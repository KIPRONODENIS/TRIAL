@extends('layouts.layout')

@section('title')

Gallery

@endsection



@section('content')
<div class="container card my-5">

  <h1 class="fw-light text-center text-lg-start mt-4 mb-0"> Gallery</h1>

  <hr class="mt-2 mb-5">

  <div class="row text-center text-lg-start">
    @foreach($data as $dataItem)

    <div class="col-lg-3 col-md-4 col-6 gallery ">
      <a href="#" class="d-block mb-4 h-100 position-relative">
        <img class="img-fluid " height="400" width="400" src="{{asset('storage/'. $dataItem->file_name)}}" alt="">
          <div class="overlay ">
            <div class="text">
              <h5 class="fw-light">{{$dataItem->title}}</h5>
              <h6 class="fw-light">{{$dataItem->description}}</h6>
            </div>
          </div>
      </a>
    
    </div>

   @endforeach
  </div>

</div>


@endsection