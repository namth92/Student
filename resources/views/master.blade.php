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
					<li><a href="{{ route('input') }}">Input</a></li>
					<li><a href="{{ route('list') }}">List</a></li>
				</ul>
			</div>
		</nav>
		@yield('Content');
	</div>
</body>
</html>