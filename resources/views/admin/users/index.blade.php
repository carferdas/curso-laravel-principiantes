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
						<a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-default">Ver</a>
						<a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-default">Editar</a>
						{!! Form::open(['route' => ['admin.users.destroy', $user], 'method' => 'delete', 'class' => 'form-delete']) !!}
							{!! Form::submit('Eliminar', ['class' => 'btn btn-default']) !!}
						{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $users->render() !!}
	</div>
@stop