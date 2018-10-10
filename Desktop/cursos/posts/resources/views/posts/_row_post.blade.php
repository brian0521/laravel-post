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



			<script type="text/javascript">
				$(document).ready(function(){

					$(".ocultar").hide()

				});
			</script>