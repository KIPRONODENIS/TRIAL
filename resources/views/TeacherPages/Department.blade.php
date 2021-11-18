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
<form role="form" action="tdepartment" method="post" enctype="multipart/form-data">

  {{csrf_field()}}
                <div class="card-body">

                	 <div class="form-group">
                		
                		<label for="selectdepartment">Department name</label>
                    <input type="text" name="name" class="form-control" id="" placeholder="e.g Mathematics">
                	</div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Select image</label>
                    <div >
                      <div >
                        <input type="file" class="" name="file">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                   
                    </div>
                  </div>
                  <div class="form-group">
                		<label for="management" >Edit Departments
                			
                		</label>

                 <textarea name="department" rows="10" class="form-control" id="department">
                 	
                 </textarea>
                 </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">save changes</button>
                </div>
              </form>
              </div>



@endsection