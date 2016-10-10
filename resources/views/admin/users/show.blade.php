@extends('admin.template')

@section('title', 'Ver usuario')

@section('content')
	<ul>
		<li><b>Nombre:</b> {{ $user->first_name }}</li>
		<li><b>Apellido:</b> {{ $user->last_name }}</li>
		<li><b>Correo:</b> {{ $user->email }}</li>
		<li>
			<b>Tipo:</b> 
			@if($user->type == 'admin')
				Administrador
			@else
				Miembro
			@endif
		</li>
	</ul>
@stop