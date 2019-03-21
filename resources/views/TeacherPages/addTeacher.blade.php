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
                    
                    <label for="Selectslide">Select Department </label>
                   <select class="form-control" name="id">
                			
                			<option value="1">Mathematics </option>
                			<option value="2">Languages   </option>
                			<option value="3">Sciences</option>
                			<option value="4">Humanities  </option>
                			<option value="5"> ICT  </option>
                			<option value="6"> Guidance and Counceling </option>
                      <option value="7">Boarding </option>
                      <option value="8">Examination  </option>
                      <option value="9">games  </option>

                			
                		</select>
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


