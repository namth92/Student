@extends('master')

@section('Content')

<div class="panel panel-primary">
	<div class="panel-heading">
		 Input Student's Information
	</div>
	<div class="panel-body">
		<table class="table table-hover">
			<thead> 
				<tr>
					<th>No</th>
					<th>Fullname</th>
					<th>Age</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@php ($i=1)
				@foreach($data as $item)
					<tr>
						<td>{{ $i++ }}</td>
						<td>{{ $item->fullname }}</td>
						<td>{{ $item->age}}</td>
						<td>
							<a href="{{ route('list').'/'.$item->no }}"><button class="btn btn-danger">Delete</button></a>
							<a href="{{ route('input').'/'.$item->no }}"><button class="btn btn-warning">Edit</button></a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection