
@extends('layouts.super')

@section('content')


<div class="container card py-2 w-3/4 mx-auto">

@if(session('success'))
<div class="alert alert-success">
{{session('success')}}
</div>
@endif

<div class="d-flex justify-content-end  ">
<a href="/admin/subjects/create" class="btn btn-success text-white mb-1">Create New</a>
</div>
<h4>List of Subjects </h4>
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
        <td>{{$loop->index + 1}}</td>
        <td>{{$subject->name}}</td>
        <td>
     
         <a href="{{url('admin/subjects/' . $subject->id . '/edit')}}" class="btn btn-sm btn-primary">Edit</a>
          <button  onclick="event.preventDefault();document.querySelector('#deleted-{{$subject->id}}').submit()" class="btn btn-sm btn-danger">Delete
          <form action="{{url('admin/subjects/' . $subject->id)}}" method="post" id="deleted-{{$subject->id}}" class="d-none">
          @csrf
          @method('delete')
          </form>
          </button>
        </td>
      </tr>
    @endforeach

    <tr>
        <td colspan="3" class="text-right">
        <div>
         {{$subjects->links()}}
         </div>
       </td>
    </tr>

 @else
 <tr>
 <td colspan="3">You have no Subjects Yet</td>
 </tr>
    @endif 
    </tbody>
  </table>
 </div>




@endsection

