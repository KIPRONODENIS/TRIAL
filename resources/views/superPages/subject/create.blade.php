
@extends('layouts.super')

@section('content')


<div class="container">
<form action="/admin/subjects" method="post">
@csrf
@if(isset($subject) && $subject->id != null)
<input type="hidden" name="id" value="{{$subject->id}}">
@endif

@if(session('success'))
<div class="alert alert-success">
{{session('success')}}
</div>
@endif

  <div class="form-group">
    <label for="email">Name</label>
    <input type="text" name="name" value="{{$subject->name ?? old('name')}}" class="form-control" placeholder="e.g Mathematics" id="subject">
@error('name')
<div class="alert alert-danger">
{{$message}}
</div>
@enderror

  </div>

  <button type="submit" class="btn btn-success mb-2">Submit</button>
</form>
 </div>




@endsection