@extends('layouts.teacher')

@section('title')


@endsection

@section('content')
<div class="container  assignments">
    <h1>DELETE TEACHER</h1>
    <div class="card">
      <div class="card-body assingments-body">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <form action="/removeteacher" method="post">
              {{csrf_field()}}
            <div  class="form-group">
              <label for="form">
               SELECT DEPARTMENT
              </label>
               <select class="form-control" name="id">
                      
                      <option value="1">Mathematics </option>
                      <option value="2">Languages   </option>
                      <option value="3">Sciences</option>
                      <option value="4">Humanities  </option>
                      <option value="5">ICT   </option>
                      <option value="6"> Guidance and Counceling </option>
                      <option value="7">Boarding  </option>
                      <option value="8">Examination  </option>
                      <option value="9">games  </option>

                      
                    </select>
            </div>
            
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <button type="submit" class="btn btn-success" id="submit" style="margin-top:31px;"> SUBMIT</button>

          </div>
          </form>
        </div>
        <div class="row assignments-values">
          <div class="card">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Teachersname</th>
                    <th scope="col">REMOVE</th>
                  </tr>
                </thead>
                <tbody>

                  @if(session()->has('message'))

      <p class="alert alert-danger">{{session()->get('message')}}</p>

      @endif
                  @foreach($teachers as $teacher)

                  <tr>

                    <th scope="row">{{$teacher->id}}</th>
                    <td>{{$teacher->teachers_name}}</td>
                    <form action="{{'/delete/'.$teacher->id}}" method="post">
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