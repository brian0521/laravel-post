@extends('layout.template')


@section('index-content')

	<h3>Crea tu Tuit TWITTEA</h3>
	<a href="{{route('posts.index')}}">Listar Post</a>	

	<form method="POST" action="{{route('posts.store')}}">
		@include('posts/_form')
	</form>



@endsection