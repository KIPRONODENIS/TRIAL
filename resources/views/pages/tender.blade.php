@extends('layouts.layout')

@section('title')

Tenders
@endsection

@section('content')
<div class="container tenders">

		<h1>TENDERS</h1>
		<div class="row">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<th scope="col">Tender ID</th>
					<th scope="col">Tender Name</th>
					<th scope="col">Tender Type</th>
					<th scope="col">Tender Date</th>
					<th scope="col">Status</th>
				</thead>
				<tbody>

					@foreach($tenders as $tender)
					<tr>
						<th scope="row">{{$tender->tender_id}}</th>
						<td>{{$tender->Tender_name}}</td>
						<td>{{$tender->Tender_type}}</td>
						<td>{{$tender->created_at->diffForHumans()}}</td>

						<td><button class="btn btn-success" >{{$tender->Status}}</button></td>
						@endforeach
					</tr>
					

				</tbody>
			</table>
		</div>
	</div>
</div>

		

@endsection