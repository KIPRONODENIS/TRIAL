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
                		
                		<label for="selectdepartment">select Department </label>
                		<select class="form-control" name="id">
                			
                			<option value="1">Mathematics </option>
                			<option value="2">Languages   </option>
                			<option value="3">Sciences</option>
                			<option value="4">Humanities  </option>
                			<option value="5">ICT   </option>
                			<option value="6"> Guidance and Counceling </option>
                      <option value="7">Boarding  </option>
                      <option value="8">Examination  </option>
                      <option value="9">games  </option>

                			
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