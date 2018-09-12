@extends('layout.template')


@section('index-content')

	<FONT FACE="impact" SIZE=4 COLOR="blue" >
 <h1 align="center">Crea tu articulo y comparte!</h1></FONT>
	<a href="{{route('articles.index')}}">Listar articulo</a>	

	<form method="POST" action="{{route('articles.store')}}">
		@include('articles/_form')
	</form>



@endsection