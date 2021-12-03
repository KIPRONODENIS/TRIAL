
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
<form role="form" action="{{url('admin/suniforms')}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}

  <input type="hidden" name="id" value="{{$uniform->id ?? ''}}">


                <div class="card-body">
                 <div class="form-group">
                		<label for="type"> Name </label>
                		<input type="text" class="form-control" name="name"  id="type" placeholder="e.g school  tie" value = "{{ $uniform->name ?? old('name')}}"/>
@error('name')
<p class="alert alert-danger">{{$message}}</p>
@enderror
                  </div>
                	
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Select image</label>
                    <div class="form-group">
                      <div >
                        <input type="file" name="file"  id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        @error('file')
                        <p class="alert alert-danger">{{$message}}</p>
                        @enderror
                      </div>
                    </div>

                  @if(isset($uniform->file_name))
                  <img src="{{asset('storage/'.$uniform->file_name)}}" width="100" height="100">
                  @endif
                  </div>
                  <div class="form-group">
                		<label for="management" >Description
                			
                		</label>

                 <input type="text" name="description"  class="form-control" id="uniform" value = " {{ $uniform->description ?? old('description')}}">
                 	@error('description')
                  <p class="alert alert-danger">{{$message}}</p>
                  @enderror

                 
                 </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">save changes</button>
                </div>
              </form>
              </div>




@endsection