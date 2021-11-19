@extends('layouts.layout')

@section('title')

assignments
@endsection

@section('content')
<div class="container  assignments">
		<h1>ASSIGNMENTS</h1>
		<div class="card">
			<div class="card-body assingments-body">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<form action="assign" method="post">
							{{csrf_field()}}
						<div  class="form-group">
							<label for="form">
								Choose Your Class
							</label>
							<select class="form-control uppercase" name="form" >
								<option value="1">form 1</option>
								<option value="2">form 2</option>
								<option value="3">form 3</option>
								<option value="4">form 4</option>
							</select>
						</div>
						
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<button type="submit" class="btn btn-success" id="submit"> SUBMIT</button>

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
										<th scope="col">SUBJECT</th>
										<th scope="col">DOWNLOAD HERE</th>
									</tr>
								</thead>
								<tbody>
									@foreach($downloads as $download)

									<tr>

										<th scope="row">{{$download->id}}</th>
										<td>{{$download->file_subject}}</td>
										<td><a href="{{$download->file_name}}" download="{{$download->file_name}}" class="btn btn-success">download</a></td>
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