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
<form role="form" action="/addteacher" method="post" enctype="multipart/form-data">

  {{csrf_field()}}
                <div class="card-body">





                <h1 align="center">NEW TEACHER</h1>

                <div class="form-group">
                    @if(isset($departments ) && count($departments )> 0 )
                    <label for="Selectslide">Select Department </label>
                   <select class="form-control" name="id">
                			@foreach ($departments as $department )
                          <option value="{{$department->id}}">{{$department->name}}</option>
                      @endforeach
       
                			
                		</select>
                    @else
                    <p class="badge badge-danger">No departments created.PLease create one here to proceed</p>
                    @endif
                  </div>

                   <div class="form-group">
                		<label for="teachersname" >Enter Teacher's Name
                		</label>

                 <input type="text" name="teachersname"  class="form-control">
                 	
                 
                 </div>	
                  
                 


                 
                 
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">save changes</button>
                </div>
              </form>
              </div>
<script type="text/javascript" src="{{asset('  /js/jquery/jquery-3.3.1.min.js')}}"></script>

<script>
  $(document).ready(function(){

    alert('am working');
  });
  

</script>

@endsection


