@extends('layout.template')


@section('index-content')
	<br>

	<FONT FACE="impact" SIZE=6 COLOR="blue" >
 <h1 align="center">POSTS</h1></FONT>

	
	<a href="{{route('posts.create')}}">
	
	  <button type="button" class="btn btn-raised btn-primary btn-lg btn-block">Crear Post </button>
	  </a>
  		
	</button>
	<br/>
	<table class="table">
		<thead>
			<th>Title</th>
			<th>Description</th>
		</thead>
		<tbody>
			@foreach($posts as $post)
				<tr>
					<td>
						<a href="{{route('posts.show', $post)}}">
						{{$post->title}}
						</a>
					</td> 
					<td>{{$post->description}}</td>
					<td>  
<td> 

  <div align="center"> 


  	<div alig="center"> 
	
 	
  <form action=	"{{route('posts.destroy', $post ) }}" method="POST">
  		{{csrf_field() }}
  		{{method_field('DELETE')}}
    <button class="btn btn-raised btn-success" type="submit" name="submit_mult" value="Borrar" title="Borrar"> 
    <img src="/imagenes/borrar.png" alt="Borrar" width="30" height="30" align="middle" class="icon" title="Borrar"> 
      </div> 
   </button>
   </form> 


<td>   

<div alig="center"> 
	
 	<a href="{{route('posts.edit', $post ) }}">
	 <button class="btn btn-raised btn-danger" type="submit" name="submit_mult" value="Exportar" title="Exportar"> 
	 	<img src="/imagenes/edit.png" alt="cambiar" width="30" height="30" align="middle" class="icon" title="cambiar">  
	  </button> 
	 </a>
</div>  
				</tr>
			@endforeach
		</tbody>
	</table>
	


@endsection
