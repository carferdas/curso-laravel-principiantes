@extends('admin.template')

@section('title', 'Crear usuario')

@section('content')
	{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST', 'files' => true]) !!}
		
		<div class="form-group">
			{!! Form::label('first_name', 'Nombre') !!}
			{!! Form::text('first_name', null, ['class' => 'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('last_name', 'Apellido') !!}
			{!! Form::text('last_name', null, ['class' => 'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Email') !!}
			{!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::password('password', ['class' => 'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password_confirmation', 'Repetir Contraseña') !!}
			{!! Form::password('password_confirmation', ['class' => 'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type', 'Tipo de usuario') !!}
			{!! Form::select('type', ['admin' => 'Administrador', 'member' => 'Miembro'], null, ['class' => 'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('avatar', 'Avatar') !!}
			{!! Form::file('avatar') !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Crear usuario', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}
@stop