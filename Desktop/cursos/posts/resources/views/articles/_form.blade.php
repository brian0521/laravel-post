
 {{ csrf_field()}}
 	
 	<div class="form-group">
 		<FONT FACE="raro, courier" SIZE=6 COLOR="blue">
 Selecciona Tu categoria de POST</FONT>
 		<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01"></label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="post_id">
 
 			@foreach($posts as $post)
 				<option 
 				value="{{$post->id}}"
 				{{ old('post_id', $article->post_id ?? null) == $post->id ? ' selected' :  ''}}
 				>
 					{{$post->title}}
 				</option> 
 			@endforeach
 		</select> 
 	</div>
 	</div>


	<div class="form-group">
		 <label for="title"
		 		class="bmd-label-floating">
		 		TITULO
		 </label>
		 <input type="text" class="form-control" id="name" name="name" value="{{ old('name',$article->name ?? NULL)}}">
	 </div>

 	<div class="form-group">
 		<label for="description" class="bmd-label-floating">
 			contenido
 		</label>
 		<input type="text" class="form-control" id="content" name="content" value="{{ old('content', $article->content ?? NULL)}}">
 	</div>

</br>


	<button type="submit" class="btn btn-primary btn-raised">ENVIAR</button>