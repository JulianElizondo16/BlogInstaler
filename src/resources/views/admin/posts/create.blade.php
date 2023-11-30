@extends('adminlte::page')

@section('title', 'Cyber Fuel')

@section('content_header')
    <h1>Crear nuevo post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off', 'files' => true]) !!}

            {{-- Como vamos a utilizar el mismo formulario aca como en edit, lo mas comodo es copiar el codigo y hacerlo reutilizable
            Aca lo que vamos a hacer con el include es llamar a ese formulario que ya tenemos creado  --}}
            @include('admin.posts.partials.form')

            {!! Form::submit('Crear post', ['class' => 'btn btn-primary']) !!}


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
        /* FIN PRUEBA  */
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });



        /* CODIGO PARA USAR EL CKEDITOR */
        ClassicEditor
            .create(document.querySelector('#extract'), {})
            .catch(error => {
                console.error(error);
            });
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
