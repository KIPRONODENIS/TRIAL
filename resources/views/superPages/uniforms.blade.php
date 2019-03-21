
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
<form role="form" action="/suniforms" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
                <div class="card-body">
                 <div class="form-group">
                		
                		<label for="selecttype">Select uniform type </label>
                		<select class="form-control" name="id">
                			
                			<option value="1">School Tie </option>
                			<option value="2">School shoes </option>
                			<option value="3">School sweater </option>
                			<option value="4">School shirt </option>
                			<option value="5">School Blazer </option>
                			<option value="6">Games kit </option>
                			<option value="7">School skirt </option>
                			<option value="8">School Socks </option>
                			
                		</select>
                	</div>
                	
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Select image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
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