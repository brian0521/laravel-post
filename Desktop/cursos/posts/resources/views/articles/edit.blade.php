@extends('layout.template')


@section('index-content')

	<h3>EDITA TU ARTICULO PRRO/h3>	
	<a href="{{route('articles.index')}}">Listar Post</a>	

	<form method="POST" action="{{route('articles.update', $article)}}">
	{{method_field('PUT')}}	
		@include('articles/_form')
	</form>



@endsection