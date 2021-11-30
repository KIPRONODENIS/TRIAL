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
<form role="form" action="/smanagement" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
                <div class="card-body">

                	 <div class="form-group">
                		
                		<label for="Selectslide">select Section </label>
                		<select class="form-control" id="selectManagement" name="id" 
                    onchange="location.replace(document.querySelector('#selectManagement').value)">
                			<option value="1" disabled {{ $managementDescription ===null ?  'selected' : ''}}>Select An option </option>
                			<option {{ $management ==='principal' ?  'selected' : ''}} value="/admin/management/principal/edit">Principal </option>
                			<option {{ $management ==='bog' ?  'selected' : ''}}  value="/admin/management/bog/edit">Board of Governors  </option>
                      <option {{ $management ==='dprincipal' ?  'selected' : ''}} value="/admin/management/dprincipal/edit">Deputy principal  </option>
                			<option {{ $management ==='pta' ?  'selected' : ''}} value="/admin/management/pta/edit">P.T.A  </option>

                      <option {{ $management ==='captain' ?  'selected' : ''}}  value="/admin/management/captain/edit">Captain </option>
                			<option {{ $management ==='deputycaptain' ?  'selected' : ''}}  value="/admin/management/deputycaptain/edit">Deputy Captain </option>
                			<option {{ $management ==='studentleaders' ?  'selected' : ''}}  value="/admin/management/studentleaders/edit"> Student Leaders </option>
                
        
                		</select>
                	</div>
                  <input type="hidden" name="name" value="{{$management}}" /> 
                  <div class="form-group">
                    <label for="exampleInputFile">Select image</label>
                    <div >
                      <div class="">
                        <input type="file" name="file"  >
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    
                    </div>
                  </div>
                  <div class="form-group">
                		<label for="management" >Edit management  <i>*Enter Atleast 300 words*</i>
                			
                		</label>

                 <textarea name="management" rows="10" class="form-control" id="management" placeholder="Enter Atleast 300 words">
                 	{{$managementDescription ?? old('management')}}
                 </textarea>
                 </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="save changes" class="btn btn-success">save changes</button>
                </div>
              </form>
              </div>





@endsection