@extends('layouts.student')

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
<form role="form" action="/studentleaders" method="post" enctype="multipart/form-data">

  {{csrf_field()}}

                <div class="card-body">
                 <div class="form-group">
                		
                		<label for="Selectslide">Select Section </label>
                		<select class="form-control" name="id">
                			
                			<option value="6">Captain </option>
                			<option value="7">Deputy Captain </option>
                			<option value="8">Student Leaders </option>
                			
                		</select>
                	</div>
                	
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Select image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="file" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                		<label for="studentleaders" >Edit Student Leaders 
                			
                		</label>

                 <textarea name="studentleaders" rows="10" class="form-control" id="studentleaders">
                 	
                 </textarea>
                 </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="save changes" class="btn btn-success">save changes</button>
                </div>
              </form>
              </div>




@endsection