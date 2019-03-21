@extends('layouts.super')


@section('title')


@endsection

@section('content')
<div class="container  assignments">
    <h1>DELETE  TENDER</h1>
    <div class="card">
      <div class="card-body assingments-body">
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12">
          

        </div>
        <div class="row assignments-values">
          <div class="card">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">tendername</th>
                    <th scope="col">REMOVE</th>
                  </tr>
                </thead>
                <tbody>

                  @if(session()->has('message'))

      <p class="alert alert-danger">{{session()->get('message')}}</p>

      @endif
                  @foreach($data as $data)

                  <tr>

                    <th scope="row">{{$data->id}}</th>
                    <td>{{$data->Tender_name}}</td>
                    <form action="{{'/dtenders/'.$data->id}}" method="post">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                    <td><button class="btn btn-success" type="submit">REMOVE</button></td>
                    </form>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection