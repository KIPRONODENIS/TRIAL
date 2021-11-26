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
<form role="form" action="/sfees" method="post" enctype="multipart/form-data">

    {{csrf_field()}}
                <div class="card-body">
                 
                  <div class="form-group">
                		
                		<label for="selectdepartment">select Form </label>
                		<select class="form-control" name="id">
                			
                			<option value="1">Form 1 </option>
                			<option value="2">Form 2   </option>
                			<option value="3"> Form 3</option>
                			<option value="4">Form 4  </option>
                			

                			
                		</select>
                	</div>

                	
                  
                
                  <div class="form-group">
                		<label for="termone" >Term 1
                			
                		</label>

                 <input type="number" name="term1"  class="form-control" id="fee">
                 	
                 
                 </div>
                  <div class="form-group">
                		<label for="term2" >Term 2
                			
                		</label>

                 <input type="number" name="term2"  class="form-control" id="fee">
                 	
                 
                 </div>
                  <div class="form-group">
                		<label for="term3" >Term 3
                			
                		</label>

                 <input type="number" name="term3"  class="form-control" id="fee">
                 	
                 
                 </div>
                 
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">save changes</button>
                </div>
              </form>
              </div>
@endsection