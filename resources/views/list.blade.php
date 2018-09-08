<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li><a href="{{ route('input')}}">Input</a></li>
					<li class="active"><a href="#">List</a></li>
				</ul>
			</div>
		</nav>
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
						</tr>
					</thead>
					<tbody>
						@foreach($data as $item)
							<tr>
								<td>{{ $item['no'] }}</td>
								<td>{{ $item['fullname'] }}</td>
								<td>{{ $item['age'] }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>