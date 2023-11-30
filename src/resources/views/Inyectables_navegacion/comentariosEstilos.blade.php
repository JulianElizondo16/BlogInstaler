@section('comentariosEstilos')
    
<style>
    .body-comentario{
    margin-top:20px;
    background:#eee;
}
@media (min-width: 0) {
    .g-mr-15 {
        margin-right: 1.07143rem !important;
    }
}
@media (min-width: 0){
    .g-mt-3 {
        margin-top: 0.21429rem !important;
    }
}

.g-height-50 {
    height: 50px;
}

.g-width-50 {
    width: 50px !important;
}

@media (min-width: 0){
    .g-pa-30 {
        padding: 2.14286rem !important;
    }
}

.g-bg-secondary {
    background-color: #fafafa !important;
}

.u-shadow-v18 {
    box-shadow: 0 5px 10px -6px rgba(0, 0, 0, 0.15);
}

.g-color-gray-dark-v4 {
    color: #777 !important;
}

.g-font-size-12 {
    font-size: 0.85714rem !important;
}

.media-comment {
    margin-top:20px
}
/*Fin del css de comentarios publicados*/

/*Aqui inicia el css del formulario de comentarios*/
.contact-form {
  border: 1px solid #eee;
  border-radius: 5px;
  padding: 20px;
  background-color: #fafafa;
  box-shadow: 0 5px 10px -6px rgba(0, 0, 0, 0.15);
  margin: 0 auto;
  max-width: 700px;
}

.contact-form label {
  font-weight: bold;
}

.contact-form input,
.contact-form select,
.contact-form textarea {
  width: 100%;
  margin-bottom: 10px;
  padding: 5px;
  border: 1px solid #eee;
  border-radius: 3px;
}

.centered-form {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}

.contact-form h4 {
  text-align: center;
}

</style>

<ul>
    {{-- PRUEBA DE BARRA DE FILTRACION --}}
    <div class="container">
        <h1 class="text-center mt-10 mb-4 text-2xl">Búsqueda de motivos</h1>
        <hr>
        <div class="flex justify-center md:flex-row mt-4">
            <form action="{{ route('comentarios.home') }}" method="GET" class="text-center">
                <div class="form-group">
                    <input type="text" name="busqueda" class="form-input rounded-lg" placeholder="Buscar..." />
                    <button type="submit" class=" ml-4 btn btn-dark bg-gray-800">Enviar</button>
                </div>
            </form>
        </div>
    </div>
    {{-- FINAL PRUEBA DE BARRA DE FILTRACION --}}
</ul>

    @foreach ($comentarios as $comentario)
<div class="container  ">
<div class="row justify-content-lg-center ">
    <div class="col-md-8">
        <div class="media g-mb-30 media-comment mb-14 ">
            
            <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Image Description">
            <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
              <div class="g-mb-15">
                <h3 class="h3 g-color-gray-dark-v1 mb-0">{{ $comentario->name }}</h3>

            <br>
                <h5 class="h5 g-color-gray-dark-v1 mb-0">Motivo de la consulta: {{$comentario->motivo}}</h5>
                <br>
                <span class="g-color-gray-dark-v4 g-font-size-12">{{$comentario->created_at}}</span>
              </div>
        
              <p> {{$comentario->descripcion}}</p>
        
              <ul class="list-inline d-sm-flex my-0">
                <li class="list-inline-item ml-auto">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">
                    <i class="fa fa-reply g-pos-rel g-top-1 g-mr-3"></i>
                    Responder</a>
                    
                </li>
                <li>
                    <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="{{route('comentarios.show', $comentario->id)}}">
                        <i class="fa fa-reply g-pos-rel g-top-1 g-mr-3"></i>
                        Mas informacion</a>
                </li>
              </ul>
            </div>
            
        </div>
    </div>
</div>
</div>
@endforeach
</ul>
{{ $comentarios->links() }}
</div>

{{-- ACA VAMOS A HACER EL GENERAR UN COMENTARIO NUEVO. --}}
{{-- ACA VAMOS A HACER EL GENERAR UN COMENTARIO NUEVO. --}}

<div role="main" class="main">
    <div class="container py-4">
        <div class="grid grid-cols-1">
            <div class="col">
                <div class="blog-posts single-post">
                    <div class="post-block mt-3 post-leave-comment">
                        <div class="centered-form">
                            <h4 class="mb-3 text-2xl font-semibold">Deja un comentario</h4>
                            <form class="contact-form p-2 rounded bg-gray-200 smaller-form" action="{{ route('comentarios.generar') }}" method="POST">
                                @csrf
                                <div class="p-2">
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <div class="form-group">
                                            <label class="form-label required font-semibold text-gray-800">Nombre Completo</label>
                                            <input placeholder="Ingrese su Nombre" type="text" name="name" data-msg-required="Please enter your name." maxlength="100" class="form-input smaller-input" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label required font-semibold text-gray-800">Correo Electronico</label>
                                            <input placeholder="Email" type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-input smaller-input" name="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label required font-semibold text-gray-800">Selecciona el motivo:</label>
                                        <select name="motivo" class="form-select smaller-input" required>
                                            <option value="" disabled selected hidden>Selecciona un motivo</option>
                                            <option value="Comentario">Comentario</option>
                                            <option value="Queja">Queja</option>
                                            <option value="Solicitud de ayuda">Necesito Ayuda</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label required font-semibold text-gray-800">Comentario</label>
                                        <textarea maxlength="1000" data-msg-required="Please enter your message." rows="6" class="form-input smaller-input" name="descripcion" required></textarea>
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="submit" class="btn text-gray-300 bg-gray-800 " data-loading-text="Loading">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
@endsection