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
						<a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-default btn-sm">Ver</a>
						<a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-default btn-sm">Editar</a>
						<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">Eliminar</button>
					</td>
				</tr>

				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Atención</h4>
							</div>
							<div class="modal-body">
								<div class="">¿Desea realmente eliminar este usuario?</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
								{!! Form::open(['route' => ['admin.users.destroy', $user], 'method' => 'delete', 'class' => 'form-delete']) !!}
									{!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-sm']) !!}
								{!! Form::close() !!}
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $users->render() !!}
	</div>
@stop