<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title') | Panel de administración</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	@include('admin.partials.nav')
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				@yield('content')
			</div>
		</div>
	</div>
</body>
</html>