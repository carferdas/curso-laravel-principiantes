@extends('admin.template')

@section('title', 'Usuarios')

@section('content')
	<a href="{{ route('admin.users.create') }}" class="btn btn-primary">Crear nuevo usuario</a> <br><br>
	<table class="table table-bordered">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Correo</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->first_name }}</td>
					<td>{{ $user->last_name }}</td>
					<td>{{ $user->email }}</td>
					<td>
						<a href="#" class="btn btn-default">x</a>
						<a href="#" class="btn btn-default">x</a>
						<a href="#" class="btn btn-default">x</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $users->render() !!}
	</div>
@stop