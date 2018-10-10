


<meta name="csrf-token" content="{{ csrf_token() }}">

  <div class="row">
    <div class="col">
      <input id="title" type="text" class="form-control" placeholder="TITLE">
    </div>
    <div class="col">
           <input id="description" type="text" class="form-control" placeholder="DESCRIPTION">
    </div>
          <button class="btn btn-raised btn-success" type="submit" name="submit_mult" value="Borrar" title="Borrar"> 
			     <img src="/imagenes/borrar.png" alt="Borrar" width="50" height="50" align="middle" class="icon" title="Borrar"> <br>

	<button class="btn btn-raised btn-primary enviar_post" value="Exportar" title="Exportar"> 
				  <img src="/imagenes/limpiar.png" alt="cambiar" width="50" height="50" align="middle" class="icon" title="cambiar">  
			 </button> 
  </div>


<script type="text/javascript">
	
	$(document).ready(function(){
		/*
		$(".enviar_post").click(function(){
			var title = (#title).value
		});*/
		$(".enviar_post").click(function(){

			//Toma de valores
			var title = $("#title").val();
			var description = $("#description").val();

			//Creacion del json(objeto, array)
			var data = {
				title: title,
				description: description
			}

			console.log(data)

			//Configuaracion cabeceras ajax
			$.ajaxSetup({

		        headers: {

		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

		        }

		    });
		    //envío ajax
			$.ajax({
				url: 'posts',
				data: data,
				type:'POST',
				success: function(data){
					console.log(data)

					$('.add_tr').append(data)

				}
			})


		});
		
		
	});

</script>