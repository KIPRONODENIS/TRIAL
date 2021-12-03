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
                			
                			<option {{(isset($fee ) && $fee->id === 1) ? 'selected': ' '}} value="1">Form 1 </option>
                			<option value="2" {{(isset($fee ) && $fee->id === 2) ? 'selected': ' '}} >Form 2   </option>
                			<option value="3" {{(isset($fee ) && $fee->id === 3) ? 'selected': ' '}} > Form 3</option>
                			<option value="4" {{(isset($fee ) && $fee->id === 4) ? 'selected': ' '}} >Form 4  </option>
                			

                			
                		</select>
                	</div>

                	
                  
                
                  <div class="form-group">
                		<label for="termone" >Term 1
                			
                		</label>

                 <input type="number" name="term1" value="{{$fee->term1 ?? old('term1')}}" class="form-control" id="fee">
                 	
                 
                 </div>
                  <div class="form-group">
                		<label for="term2" >Term 2
                			
                		</label>

                 <input type="number" name="term2" value="{{$fee->term2 ?? old('term2')}}"  class="form-control" id="fee">
                 	
                 
                 </div>
                  <div class="form-group">
                		<label for="term3" >Term 3
                			
                		</label>

                 <input type="number" name="term3" value="{{$fee->term3 ?? old('term3')}}"  class="form-control" id="fee">
                 	
         
                 </div>
                 
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">save changes</button>
                </div>
              </form>
              </div>
@endsection