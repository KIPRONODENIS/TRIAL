
@extends('layouts.teacher')

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
<form role="form" action="/tuniforms" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
                <div class="card-body">
                 <div class="form-group">
                    
                    <label for="selecttype">Select uniform type </label>
                    <input type="text" class="form-control" name="name" />
  
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Select image</label>
                    <div class="form-group">
                      <div class="">
                        <input type="file" name="file" />
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="management" >Description
                      
                    </label>

                 <input type="text" name="description"  class="form-control" id="uniform">
                  
                 
                 </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">save changes</button>
                </div>
              </form>
              </div>




@endsection