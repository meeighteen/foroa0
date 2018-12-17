@extends('layout')

@section('contenido')

	<h1>Publicar un articulo</h1>

	@if( session()->has('info'))
		<h3>{{ session('info') }}</h3>
	@else

	<form method="POST" action="publicar">
		<p><label for="titulo">
			Nombre del articulo
			<input type="text" name="titulo" value="{{ old('titulo') }}">
			{{ $errors->first('titulo') }}
		</label></p>
		<p><label for="precio">
			Precio
			<input type="text" name="precio" value="{{ old('precio') }}">
			{{ $errors->first('precio') }}
		</label></p>
		<p><label for="contenido">
			Descripción
			<textarea name="contenido">{{ old('contenido') }}</textarea>
			{{ $errors->first('contenido') }}
		</label></p>

		<input type="submit" name="Enviar">
	</form>
	@endif
@stop