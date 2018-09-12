
 {{ csrf_field()}}


	<div class="form-group">
		 <label for="title"
		 		class="bmd-label-floating">
		 		TITULO
		 </label>
		 <input type="text" class="form-control" id="title" name="title" value="{{ old('title',$post->title ?? NULL)}}">
	 </div>

 	<div class="form-group">
 		<label for="description" class="bmd-label-floating">
 			Descripción
 		</label>
 		<input type="text" class="form-control" id="description" name="description" value="{{ old('description', $post->description ?? NULL)}}">
 	</div>

</br>


	<button type="submit" class="btn btn-primary btn-raised">ENVIAR</button>