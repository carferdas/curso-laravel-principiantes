@extends('admin.template')

@section('title', 'Inicio')

{{-- Muestra de categorias --}}
@section('content')
	<h1>{{ $company or 'No existe la variable company' }}</h1>
	<h3>Listado de categorias</h3>
	<ul class="list-group">
		@forelse ($categories as $category)
			<li class="list-group-item">{{ $category->name }}</li>
		@empty
			<p>No existen categorias</p>
		@endforelse
	</ul>
@stop