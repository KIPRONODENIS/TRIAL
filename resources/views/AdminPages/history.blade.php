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
<form role="form" action="/history" method="post" enctype="multipart/form-data">

  {{csrf_field()}}

                <div class="card-body">

                	<div class="form-group">
                		<label for="history" >Edit History
                			
                		</label>

                 <textarea name="history" rows="10" class="form-control" id="history">
                 	{{$management->description ?? ' '}}
                 </textarea>
                 </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Select image</label>
                    <div class="">
                      <div >
                        <input type="file"  name="file" >
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    
                    </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">save changes</button>
                </div>
              </form>
              </div>

@endsection