@extends('layout.template')


@section('index-content')

	<h3>Crea tu Tuit TWITTEA</h3>	
	<a href="{{route('posts.index')}}">Listar Post</a>	

	<form method="POST" action="{{route('posts.update', $post)}}">
	{{method_field('PUT')}}	
		@include('posts/_form')
	</form>



@endsection