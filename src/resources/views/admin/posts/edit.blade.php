@extends('adminlte::page')

@section('title', 'Cyber Fuel')

@section('content_header')
    <h1>Editar post</h1>
@stop

{{-- ACA PRACTICAMENTE LO QUE HICIMOS ES COPIAR EL FORMULARIO DE CREATE, Utilizando el form de la carpeta partials que ya habiamos creado anteriormente. --}}
{{-- PERO NOS VA A TIRAR UN ERROR, SOLAMENTE HAY QUE HACER UNOS PASOS PARA SOLUCIONARLO. --}}
@section('content')
    {{-- Mensaje de validacion, esto es para mostrarlo. --}}
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {{-- aca tenemos que cambiar la ruta a la que estaba haciendo referencia, por update que seria la de actualizar --}}
            {!! Form::model($post, [
                'route' => ['admin.posts.update', $post],
                'autocomplete' => 'off',
                'files' => true,
                'method' => 'put',
            ]) !!}

            {{--             LO QUE ESTAMOS HACIENDO EN ESTE FORM HIDDEN ES QUE RECONOZCA QUIEN ESTA CREANDO ESE POST, PERO NO LO VA A MOSTRAR PORQUE ESTA --}}
            {!! Form::hidden('user_id', auth()->user()->id) !!}

            {{-- Como vamos a utilizar el mismo formulario aca como en edit, lo mas comodo es copiar el codigo y hacerlo reutilizable
            Aca lo que vamos a hacer con el include es llamar a ese formulario que ya tenemos creado  --}}
            @include('admin.posts.partials.form')

            {!! Form::submit('Actualizar post', ['class' => 'btn btn-primary']) !!}


            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <style>
        .image-wrapper {
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;

        }
    </style>
@stop

@section('js')

    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    {{-- /* CODIGO PARA USAR EL CKEDITOR */ --}}
    <script src="{{ asset('vendor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });


        /* CODIGO PARA USAR EL CKEDITOR */
        ClassicEditor
            .create(document.querySelector('#extract'), {
                simpleUpload: {
                    // The URL that the images are uploaded to.
                    uploadUrl: "{{ route('image.upload') }}",
                    // Enable the XMLHttpRequest.withCredentials property.
                }
            })
        /* CODIGO PARA USAR EL CKEDITOR */
        ClassicEditor
            .create(document.querySelector('#body'), {

                simpleUpload: {
                    // The URL that the images are uploaded to.
                    uploadUrl: "{{ route('image.upload') }}",
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Accept': 'application/json'
                    }

                }

            })

        /* Cambiar IMAGEN */
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event) {

            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result)
            };
            reader.readAsDataURL(file);

        }
    </script>
@endsection
