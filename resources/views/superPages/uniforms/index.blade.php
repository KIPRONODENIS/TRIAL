
@extends('layouts.super')

@section('content')


<div class="container card py-2 w-3/4 mx-auto">

@if(session('success'))
<div class="alert alert-success">
{{session('success')}}
</div>
@endif

<div class="d-flex justify-content-end  ">
<a href="/admin/suniforms/create" class="btn btn-success text-white mb-1">Create New</a>
</div>
<h4>List of Uniforms </h4>

@if(session('success')) 
<div class="alert alert-success">
{{session('success')}}
</div>
@endif

<table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Image</th>
        <th>Description</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    @if(isset($uniforms) && count($uniforms)> 0 )
    @foreach ($uniforms as $uniform)
             <tr>
        <td>{{$loop->index + 1}}</td>
        <td>{{$uniform->name}}</td>
         <td>
         <img src="{{asset('storage/'.$uniform->file_name)}}" alt="{{$uniform->name}}" width="50" height="50">
         </td>
        <td>{{$uniform->description}}</td>
        <td>
     
         <a href="{{url('admin/suniforms/' . $uniform->id . '/edit')}}" class="btn btn-sm btn-primary">Edit</a>
          <button  onclick="event.preventDefault();document.querySelector('#deleted-{{$uniform->id}}').submit()" class="btn btn-sm btn-danger">Delete
          <form action="{{url('admin/suniforms/' . $uniform->id)}}" method="post" id="deleted-{{$uniform->id}}" class="d-none">
          @csrf
          @method('delete')
          </form>
          </button>
        </td>
      </tr>
    @endforeach

    {{-- <tr>
        <td colspan="3" class="text-right">
        <div>
         {{$uniforms->links()}}
         </div>
       </td>
    </tr> --}}

 @else
 <tr>
 <td colspan="3">You have no Uniforms Yet</td>
 </tr>
    @endif 
    </tbody>
  </table>
 </div>




@endsection

