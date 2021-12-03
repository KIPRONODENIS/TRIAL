@extends('layouts.super')

@section('content')

<div class="d-flex px-2 h-100 w-100 justify-content-center align-items-center">

<form action="{{isset($club) ? route('admin.clubs.update',$club->id):route('admin.clubs.store')}}" method="post" enctype="multipart/form-data">

@if(isset($club)) 
@method('put')
@endif
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="CLub name" value="{{$club->name ?? old('name')}}">
   
  @error('name')
  <small class="text-danger">{{$message}}</small>
  @enderror

  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Cover photo</label>
    <input type="file" class="form-control" name="image" id="clubImage" > 
    @if(isset($club))
    <img src="{{asset('storage/' . $club->image ?? '')}}" alt="" height="100" width="100" class="img-fluid" id="clubImagePreview">
    @endif
    
    @error('image')
    <small class="text-danger">{{$message}}</small>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <textarea class="form-control" id="description" name="description" placeholder="Description">
     {{$club->description ?? old('description')}}
    </textarea>
    @error('description')
    <small class="text-danger">{{$message}}</small>
    @enderror

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

@endsection