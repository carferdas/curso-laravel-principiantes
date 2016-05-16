<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title') | Panel de administración</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">@yield('title')</div>
				<div class="panel-body">
					@yield('content')
				</div>
			</div>
		</div>
		<footer>
			<p>Curso Laravel Principiantes <br> &copy carlosfernandes.me</p>
		</footer>
	</div>
</body>
</html>