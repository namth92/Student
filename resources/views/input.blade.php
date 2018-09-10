@extends('master')

@section('Content')
<div class="panel panel-primary">
	<div class="panel-heading">
		 Input Student's Information
	</div>
		<form method="post" action="@if(empty($edit)) {{ route('input') }} @else {{ route('input').'/'.$edit[0]->no }} @endif">
			{{ csrf_field() }}
			<div class="panel-body">
			<div class="form-group">				
				<label>Fullname</label>
				<input value="@if(!empty($edit)){{$edit[0]->fullname}}@endif" type="text" name="fullname" class="form-control">
			</div>
			<div class="form-group">				
				<label>Age</label>
				<input value="@if(!empty($edit)){{$edit[0]->age}}@endif" type="number" name="age" class="form-control">
			</div>
			<button type="submit" class="btn btn-success">Add</button>
		</div>
	</form>
</div>

@endsection