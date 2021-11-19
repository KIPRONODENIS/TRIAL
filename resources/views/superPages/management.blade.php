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
<form role="form" action="/smanagement" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
                <div class="card-body">

                	 <div class="form-group">
                		
                		<label for="Selectslide">select Section </label>
                		<select class="form-control" name="id">
                		
                			<option value="2">Principal </option>
                			<option  value="3">Board of Governors  </option>
                      	<option value="4">Deputy principal  </option>
                			<option value="5">P.T.A  </option>
                		
                			
                		</select>
                	</div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Select image</label>
                    <div >
                      <div class="">
                        <input type="file" name="file"  >
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    
                    </div>
                  </div>
                  <div class="form-group">
                		<label for="management" >Edit management  <i>*Enter Atleast 300 words*</i>
                			
                		</label>

                 <textarea name="management" rows="10" class="form-control" id="management" placeholder="Enter Atleast 300 words">
                 	
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