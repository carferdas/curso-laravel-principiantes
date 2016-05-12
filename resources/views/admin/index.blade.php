<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Panel de administración</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1>Compañia: {{ $company }}</h1>
				<h3>Listado de categorias</h3>
				<ul class="list-group">
					@foreach ($categories as $category)
						<li class="list-group-item">{{ $category->name }}</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
