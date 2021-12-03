@extends('layouts.super')

@section('content')
<h4 class="ml-4 w-3/4 mx-auto mb-3">CLUBS AND SOCIETIES 
<a href="{{route('admin.clubs.create')}}" class="btn btn-success text-white btn-md">
Create
</a>
</h4>
<div class="d-flex px-2 h-100 pb-3 justify-content-center align-items-center card w-3/4 mx-auto">
@if(session()->has('message'))
<div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif


@if(isset($clubs) && count($clubs)> 0 )
<table class="table table-auto  ">
    <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Image</th>
         <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach($clubs as $club)
      <tr>
        <td>{{$club->name}}</td>
        <td>{{$club->description}}</td>
        <td>
        <img src="{{asset('storage/' . $club->image)}}" height="100" width="100"/>
        </td>
          <td>
          <a href="{{route('admin.clubs.edit', $club->id)}}" class="btn btn-info text-white bt-sm">Edit</a>
          <span>
         <form action="{{route('admin.clubs.destroy', $club->id)}}" method="post">
         @method('delete')
         @csrf
         <button type="submit" class="btn btn-danger btn-sm">Delete</button>
         </form>
          </span>
          </td>
      </tr>
    @endforeach
    </tbody>
  </table>

@else 
<div class="text-muted py-4">You have no CLubs Yet
<a href="{{route('admin.clubs.create')}}" class="btn btn-success text-white btn-md">
Create
</a>
</div>

@endif
</div>

@endsection