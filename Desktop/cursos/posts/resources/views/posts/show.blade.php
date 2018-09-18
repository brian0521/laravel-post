@extends('layout.template')


@section('index-content')

	
	

  <FONT FACE="impact" SIZE=3 COLOR="blue" >
 <h1 align="center">Aquí están tus articulos de 
  <p>{{$post->title}}</p></h1></FONT>
	

	<a href="{{route('posts.edit',$post)}}">Editar Post</a>

	
		@foreach($post->articles as $article)
				<div id="accordion">
  
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$article->id}}" aria-expanded="true" aria-controls="collapseOne">
          {{$article->name}} ({{$article->post->title}})
        </button>
      </h5>

      <div > 
  
        <a href="{{route('articles.edit', $article ) }}">
         <button class="btn btn-raised btn-danger" type="submit" name="submit_mult" value="Exportar" title="Exportar"> 
          <img src="/imagenes/edit.png" alt="cambiar" width="30" height="30" align="middle" class="icon" title="cambiar">  
          </button> 
         </a>
      </div>  


      <div > 

        <form action= "{{route('articles.destroy', $article ) }}" method="POST">
            {{csrf_field() }}
            {{method_field('DELETE')}}
          <button class="btn btn-raised btn-success" type="submit" name="submit_mult" value="Borrar" title="Borrar"> 
          <img src="/imagenes/borrar.png" alt="Borrar" width="30" height="30" align="middle" class="icon" title="Borrar" > 
            
         </button>
         </form> 
       </div>

    </div>

    <div id="collapse{{$article->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        {{$article->content}}
      </div>
    </div>
  </div>
  

  

</div>
		@endforeach
	
@endsection