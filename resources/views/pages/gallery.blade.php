@extends('layouts.layout')

@section('title')

Gallery

@endsection



@section('content')
 <div class="container-fluid gallery">

 	<h1 class="uppercase">Gallery</h1>


<div class="card" style="background:url('storage/page-bg-1.jpg')">

  <div class="card-header"><h3>FORM ONE</h3></div>
         <div class="row">

  @foreach($data as $data)
@if($data->form=='1')
       <div class="col-md-3 col-sm-3 col-xs-12">


    <div class="card">

     <img class="card-img-top" src="{{asset('storage/'.$data['file_name'])}}" >

     <div class="card-footer">
1{{$data->class}}
     </div>
    </div>
       </div>
       @endif



       @if($data->form=='2')
       <div class="col-md-3 col-sm-3 col-xs-12">


    <div class="card">

     <img class="card-img-top" src="{{asset('storage/'.$data['file_name'])}}" >

     <div class="card-footer">
2{{$data->class}}
     </div>
    </div>
       </div>
       @endif



       @if($data->form=='3')
       <div class="col-md-3 col-sm-3 col-xs-12">


    <div class="card">

     <img class="card-img-top" src="{{asset('storage/'.$data['file_name'])}}" >

     <div class="card-footer">
3{{$data->class}}
     </div>
    </div>
       </div>
       @endif


       @if($data->form=='4')
       <div class="col-md-3 col-sm-3 col-xs-12">


    <div class="card">

     <img class="card-img-top" src="{{asset('storage/'.$data['file_name'])}}" >

     <div class="card-footer">
4{{$data->class}}
     </div>
    </div>
       </div>
       @endif



@endforeach
      </div>


         </div>


         </div>
 






@endsection