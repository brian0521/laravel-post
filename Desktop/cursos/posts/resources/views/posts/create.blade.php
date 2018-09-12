@extends('layout.template')


@section('index-content')

	<FONT FACE="impact" SIZE=4 COLOR="blue" >
 <h1 align="center">Crea tu Post y describelo!!</h1></FONT>
	<a href="{{route('posts.index')}}">Listar Post</a>	

	<form method="POST" action="{{route('posts.store')}}">
		@include('posts/_form')
	</form>



@endsection