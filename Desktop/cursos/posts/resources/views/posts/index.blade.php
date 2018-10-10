@extends('layout.template')


@section('index-content')
	<br>

	<FONT FACE="impact" SIZE=6 COLOR="blue" >
 <h1 align="center">POST DE INTERES</h1></FONT>

	
	<a href="{{route('posts.create')}}">
	
	  <button type="button" class="btn btn-raised btn-primary btn-lg btn-block">Crear Post </button>
	  </a>
  		
	</button>
	<br>
	<div>
		@include('posts/_form_ajax')
	</div>
	


	<br/>
	<table class="table">
		<thead>
			<th>Title</th>
			<th>Description</th>
			<th colspan="3"></th>
		</thead>
		<tbody class="add_tr">
			@foreach($posts as $post)
				<tr>
					<td>
						<a href="{{route('posts.show', $post)}}">
						{{$post->title}}
						</a>
					</td> 
					<td>{{$post->description}}</td>
					
					<td><!-- Button trigger modal -->
						
						<button type="button" id="my_id_modal" class="btn btn-raised btn-warning boton_abrir_modal" >VER MODAL</button>
					</td>

					<td>
						<p id="post_{{$post->id}}" class="my_id_class ocultar">{{$post->id}}</p>
					</td>

					<td> 
					  <form action=	"{{route('posts.destroy', $post ) }}" method="POST">
					  		{{csrf_field() }}
					  		{{method_field('DELETE')}}
					    <button class="btn btn-raised btn-success" type="submit" name="submit_mult" value="Borrar" title="Borrar"> 
					    <img src="/imagenes/borrar.png" alt="Borrar" width="30" height="30" align="middle" class="icon" title="Borrar"> 
					      </div> 
					   </button>
					   </form> 
					</td>

					<td>   

							
								
							 	<a href="{{route('posts.edit', $post ) }}">
								 <button class="btn btn-raised btn-danger" type="submit" name="submit_mult" value="Exportar" title="Exportar"> 
								 	<img src="/imagenes/edit.png" alt="cambiar" width="30" height="30" align="middle" class="icon" title="cambiar">  
								  </button> 
								 </a>
						


						</tr>
			@endforeach
		</tbody>
	</table>
	
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h1 id="titulo_post"></h1>

        <p class="description_post"></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<div id="mostrar_contenido">
	
</div>


<script>
	$(document).ready(function(){

		$('.ocultar').hide(); //ocultar mediante clase

		$(".boton_abrir_modal").click(function(){
			var id = $(this).parents("tr").find('.my_id_class').text();

			$.ajax({
				url: './posts/'+id,
				type:'GET',
				success: function(data){
					//console.log(data)
					//$('#mostrar_contenido').append(data);
					var post = data
					//console.log(post)

					$('#titulo_post').html(post['title']);
					$('.description_post').html(post['description']);


					$('#exampleModal').modal('show');
				}
			});

		})
	})
</script>

@endsection
