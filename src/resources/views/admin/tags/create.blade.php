@extends('adminlte::page')

@section('title', 'Cyber Fuel')

@section('content_header')
    <h1>Crear etiqueta</h1>
@stop

@section('content')
    
    <div class="card">
        <div class="card-body">

            {{-- ACA NO SE NECESITA PONER EL TOKEN PORQUE LARAVEL COLLECTIVE YA LO INGRESA CON EL FOMRULARIO --}}

            {!! Form::open(['route' => 'admin.tags.store']) !!}
                @include('admin.tags.partials.form')
                {!! Form::submit('Crear etiqueta', ['class'=> 'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>
    </div>

@stop

@section('js')
    
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

<script>
    $(document).ready( function() {
  $("#name").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
  });
});
</script>
@endsection