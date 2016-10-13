@extends('admin.template')

@section('title', 'Editar usuario')

@section('content')
	{!! Form::open(['route' => ['admin.users.update', $user], 'method' => 'PUT', 'files' => true]) !!}
		
		<div class="form-group">
			{!! Form::label('first_name', 'Nombre') !!}
			{!! Form::text('first_name', $user->first_name, ['class' => 'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('last_name', 'Apellido') !!}
			{!! Form::text('last_name', $user->last_name, ['class' => 'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Email') !!}
			{!! Form::email('email', $user->email, ['class' => 'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			<div class="row">
				<div class="col-md-1">
					<img src="/avatars/{{ $user->avatar }}" class="img-responsive">
				</div>
				<div class="col-md-11">
					{!! Form::label('avatar', 'Avatar') !!}
					{!! Form::file('avatar') !!}
				</div>
			</div>
		</div>

		<div class="form-group">
			{!! Form::submit('Editar usuario', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}
@stop