@extends('layouts.super')

@section('content')

<div class="container">

   @if (count($errors)>0)
      @foreach($errors->all() as $error)
      <p class="alert alert-danger">{{$error}}</p>
      @endforeach
      
      @endif



@if(session()->has('message'))

      <p class="alert alert-success">{{session()->get('message')}}</p>

      @endif
<form role="form" action="{{url('admin/gallery')}}" method="post" enctype="multipart/form-data">

  {{csrf_field()}}
  @php
  $gallery = $gallery ?? null;
  @endphp

@if($gallery)
<input type="hidden" name="id" value="{{$gallery->id}}">
@endif

                <div class="card-body">
                 <div class="form-group">		
                		<label for="select Title">Title </label>
                		<input class="form-control" name="title" type="text" value="{{$gallery->title ?? old('title')}}"/>
                	</div>
                	

                  <div class="form-group">
                    
                    <label for="Selectclass"> Description</label>
                    <textarea class="form-control"  name="description">{{$gallery->description ?? old('description')}} </textarea>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Select image</label>
                    <div class="">
                      <div >
                        <input type="file" class="" name="file" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                    @if(isset($gallery))
                    <img src="{{asset('storage/'.$gallery->file_name)}}" width="100px" height="100px">
                    @endif
                    
                  </div>
                 
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">save changes</button>
                </div>
              </form>
              </div>




@endsection