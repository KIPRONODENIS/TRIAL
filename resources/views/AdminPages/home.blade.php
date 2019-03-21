@extends('layouts.student')

@section('content')

<div class="container">
<form action="/adminhome" role="form" enctype="multipart/form-data" method="post">

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
                		
                		<label for="Selectslide">Select slide </label>
                		<select name="slide" class="form-control">
                			
                			<option value="1">Slide 1</option>
                			<option value="2">Slide 2</option>
                			<option value="3">Slide 3</option>
                			<option value="4">Slide 4</option>
                		</select>
                	</div>
                  <div class="form-group">
                    <label for="CaptionHeading">Caption Heading</label>
                    <input type="text" class="form-control" name="CaptionHeading" placeholder="Caption Heading">
                  </div>
                  <div class="form-group">
                    <label for=CaptionDescription">Caption Description</label>
                    <input type="text" class="form-control" name="CaptionDescription" placeholder="Caption Description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
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
                  <button type="save changes" class="btn btn-success">save changes</button>
                </div>
              </form>
              </div>


@endsection`	