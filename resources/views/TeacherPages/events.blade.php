@extends('layouts.teacher')


@section('content')


<div class="container">
<form role="form" action="/tevents" method="post">
	{{csrf_field()}}
                <div class="card-body">
                	@if (count($errors)>0)
			@foreach($errors->all() as $error)
			<p class="alert alert-danger">{{$error}}</p>
			@endforeach
			
			@endif
                 
                @if(session()->has('message'))

			<p class="alert alert-success">{{session()->get('message')}}</p>

			@endif




                	
                  
                
                  <div class="form-group">
                		<label for="EventTitle" >Event Title
                			
                		</label>

                 <input type="text" name="EventTitle"  class="form-control">
                 	
                 
                 </div>
                  <div class="form-group">
                		<label for="EventDate" >Event Date
                			
                		</label>

                 <input type="text" name="EventDate"  class="form-control">
                 	
                 
                 </div>
                  <div class="form-group">
                		<label for="StartTime" >Start Time
                			
                		</label>

                 <input type="text" name="StartTime"  class="form-control">
                 	
                 
                 </div>
                  <div class="form-group">
                		<label for="EndTime" >End Time
                			
                		</label>

                 <input type="text" name="EndTime"  class="form-control">
                 	
                 
                 </div>
                 
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="save changes" class="btn btn-success">save changes</button>
                </div>
              </form>
              </div>
@endsection