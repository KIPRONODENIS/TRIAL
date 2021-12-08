
@extends('layouts.super')

@section('content')


<div class="container card bg-white w-10/12 mx-auto ">

<div class="row py-2 px-3">
<div class="col-md-12 d-flex justify-content-end mb-1">
<a href="{{url('admin/sfees/create')}}" class="btn btn-success">{{count($fees) > 4 ? 'Edit' : 'Add New'}}</a>
</div>

<table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Form </th>
        <th>Term 1 </th>
        <th>Term 2 </th>
        <th>Term 3 </th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    @if(isset($fees) && count($fees)> 0 )
    @foreach ($fees as $fee)
             <tr>
        <td>#{{$loop->index + 1}}</td>
        <td>{{$fee->id}}</td>
        <td>Kes.{{$fee->term1}}</td>
        <td>Kes.{{$fee->term2}}</td>
        <td>Kes.{{$fee->term3}}</td>
        <td>
        {{-- <a href="" class="btn btn-sm btn-info">View</a> --}}
         <a href="{{url('admin/sfees/' . $fee->id . '/edit')}}" class="btn btn-sm btn-primary">Edit</a>
          {{-- <a href="" class="btn btn-sm btn-danger">Delete</a> --}}
        </td>
      </tr>
    @endforeach
 @else
 <tr>
 <td colspan="3">You have no fees Yet</td>
 </tr>
    @endif 
    </tbody>
  </table>
 </div>




@endsection