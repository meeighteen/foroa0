@extends('layout')

@section('contenido')
	<h1>Feed de posts</h1>
	<ul>
		@forelse($posts as $post)
			<li>{{ $post }}</li>
		@empty
			<p>No hay Posts nuevos que mostrar :/</p>
		@endforelse
	</ul>
@stop