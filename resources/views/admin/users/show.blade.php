@extends('admin.template')

@section('title', 'Ver usuario')

@section('content')
	<div class="row">
		<div class="col-md-3">
			<img class="img-responsive" src="/avatars/{{ $user->avatar }}">
		</div>
		<div class="col-md-9">
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
		</div>
	</div>
@stop