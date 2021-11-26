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
<form role="form" action="/stenders" method="post" enctype="multipart/form-data">

    {{csrf_field()}}
                <div class="card-body">
                 
                	
                  
                
                  <div class="form-group">
                		<label for="tenderid" >Tender ID 
                			
                		</label>

                 <input type="text" name="tenderid"  class="form-control" id="uniform">
                 	
                 
                 </div>
                  <div class="form-group">
                		<label for="tendername" >Tender Name
                			
                		</label>

                 <input type="text" name="tendername"  class="form-control" id="uniform">
                 	
                 
                 </div>
                  <div class="form-group">
                		<label for="tendertype" >Tender Type
                			
                		</label>

                 <input type="text" name="tendertype"  class="form-control" id="tender">
                 	
                 
                 </div>
                 
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">save changes</button>
                </div>
              </form>
              </div>

              

@endsection