@section('resumenComentarios')
 
<body>
	<div class="center-container">
		<div class="comment-container">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="media g-mb-30 media-comment">
							<img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Image Description">
							<h1>{{$comentario->motivo}} de: {{$comentario->name}}</h1>

							<br>



							<p><strong>Motivo: </strong>{{$comentario->motivo}}</p>
							<p>{{$comentario->descripcion}}</p>

							<a href="{{route('comentarios.home')}}">Volver a los cursos</a>
							<a href="{{route('comentarios.edit', $comentario)}}">Editar curso</a>

							<form action="{{ route('comentarios.delete', $comentario->id )}}" method="POST">
								@csrf @method('DELETE')
								<button type="submit">Eliminar Comentario</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection