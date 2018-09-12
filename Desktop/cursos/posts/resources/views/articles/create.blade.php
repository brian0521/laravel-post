@extends('layout.template')


@section('index-content')

	<h3>Crea tu Tuit articulo</h3>
	<a href="{{route('articles.index')}}">Listar articulo</a>	

	<form method="POST" action="{{route('articles.store')}}">
		@include('articles/_form')
	</form>



@endsection