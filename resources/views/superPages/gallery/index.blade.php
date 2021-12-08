
@extends('layouts.super')

@section('content')


<div class="container card bg-white w-10/12 mx-auto ">

<div class="row py-2 px-3">
<div class="col-md-12 d-flex justify-content-end mb-1">
<a href="{{url('admin/gallery/create')}}" class="btn btn-success">{{ 'Add New'}}</a>
</div>



@if(session()->has('message'))

      <p class="alert alert-success">{{session()->get('message')}}</p>

      @endif

<table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th> Title </th>
        <th>Description</th>
        <th>Image</th>
     
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    @if(isset($gallerys) && count($gallerys)> 0 )
    @foreach ($gallerys as $gallery)
             <tr>
        <td>#{{$loop->index + 1}}</td>
        <td>{{$gallery->title}}</td>
        <td>Kes.{{$gallery->description}}</td>
        <td>
        <img src="{{asset('storage/'.$gallery->file_name)}}" alt="{{$gallery->name}}" width="100px" height="100px">

       </td>
        
        <td>
        {{-- <a href="" class="btn btn-sm btn-info">View</a> --}}
         <a href="{{url('admin/gallery/' . $gallery->id . '/edit')}}" class="btn btn-sm btn-primary">Edit</a>
          <a href="#" onclick="event.preventDefault(); document.querySelector('#deleted-{{$gallery->id}}').submit();" class="btn btn-sm btn-danger">Delete</a>
          <form class="hidden" method="post" action="{{url('admin/tgallery/' . $gallery->id)}}" id="deleted-{{$gallery->id}}">
          @csrf
            @method('DELETE')

          </form>
        </td>
      </tr>
    @endforeach
 @else
 <tr>
 <td colspan="3">You have no gallerys Yet</td>
 </tr>
    @endif 
    </tbody>
  </table>
 </div>




@endsection