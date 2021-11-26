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
<form role="form" action="tassignments" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
                <div class="card-body">

                	 <div class="form-group">
                		
                		<label for="selectdepartment">select Form </label>
                		<select class="form-control" name="form">
                			
                			<option value="1">Form 1 </option>
                			<option value="2">Form 2   </option>
                			<option value="3"> Form 3</option>
                			<option value="4">Form 4  </option>
                			

                			
                		</select>
                	</div>

                	<div class="form-group">
                		
                		<label for="selectdepartment">select Subjects </label>
                		<select class="form-control" name="subject">
                			
                			<option value="Mathematics">Mathematics </option>
                			<option value="Computer studies ">Computer studies   </option>
                			<option value="Bussiness studies">Bussiness studies</option>
                			<option value="History ">History  </option>
                			<option value="English ">English   </option>
                			<option value="Agriculture ">Agriculture  </option>
                			<option value="Biology">Biology  </option>
                			<option value="Chemistry">Chemistry  </option>
                			<option value="Physics ">Physics  </option>
                			<option value="Geography">Geography  </option>
                			<option value="Kiswahili">Kiswahili  </option>
                			<option value="C.R.E ">C.R.E  </option>


                			
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
                 
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">upload assignments</button>
                </div>
              </form>
              </div>



@endsection