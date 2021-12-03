
@extends('layouts.super')

@section('content')


<div class="container">

<table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    @if(isset($subjects) && count($subjects)> 0 )
    @foreach ($subjects as $subject)
             <tr>
        <td>{{$loop->index}}</td>
        <td>{{$subject->name}}</td>
        <td>
        <a href="" class="btn btn-sm btn-info">View</a>
         <a href="" class="btn btn-sm btn-primary">Edit</a>
          <a href="" class="btn btn-sm btn-danger">Delete</a>
        </td>
      </tr>
    @endforeach
 @else
 <tr>
 <td colspan="3">You have no Subjects Yet</td>
 </tr>
    @endif 
    </tbody>
  </table>
 </div>




@endsection