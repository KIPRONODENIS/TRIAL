
@extends('layouts.super')

@section('content')


<div class="container card bg-white w-10/12 mx-auto ">

<div class="row py-2 px-3">
<div class="col-md-12 d-flex justify-content-end mb-1">
<a href="{{url('admin/tdepartment/create')}}" class="btn btn-success">{{ 'Add New'}}</a>
</div>



@if(session()->has('message'))

      <p class="alert alert-success">{{session()->get('message')}}</p>

      @endif

<table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th> Name </th>
        <th>Description</th>
        <th>Image</th>
     
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    @if(isset($departments) && count($departments)> 0 )
    @foreach ($departments as $department)
             <tr>
        <td>#{{$loop->index + 1}}</td>
        <td>{{$department->name}}</td>
        <td>Kes.{{$department->description}}</td>
        <td>
        <img src="{{asset('storage/'.$department->file_name)}}" alt="{{$department->name}}" width="100px" height="100px">

       </td>
        
        <td>
        {{-- <a href="" class="btn btn-sm btn-info">View</a> --}}
         <a href="{{url('admin/tdepartment/' . $department->id . '/edit')}}" class="btn btn-sm btn-primary mb-2">Edit</a>
          <a href="#" onclick="event.preventDefault(); document.querySelector('#deleted-{{$department->id}}').submit();" class="btn btn-sm btn-danger">Delete</a>
          <form class="hidden" method="post" action="{{url('admin/tdepartment/' . $department->id)}}" id="deleted-{{$department->id}}">
          @csrf
            @method('DELETE')

          </form>
        </td>
      </tr>
    @endforeach
 @else
 <tr>
 <td colspan="3">You have no departments Yet</td>
 </tr>
    @endif 
    </tbody>
  </table>
 </div>




@endsection