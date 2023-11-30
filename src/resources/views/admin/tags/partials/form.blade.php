<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre de la etiqueta ...']) !!}

    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
{{-- ACA ESTAMOS CREANDO EL FORM DE SLUG --}}
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'Ingrese el slug de la etiqueta ...', 'readonly']) !!}

    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
{{-- ACA ESTAMOS CREANDO EL FORM DE SELECT --}}
<div class="form-group">
    {{-- ESTE ES EL MOTODO NORMAL CON HTML
    <label for="">Color</label>
    <select name="color" id="" class="form-control">
        <option value="red">Color rojo</option>
        <option value="green">Color Verde</option>
        <option value="blue" selected>Color Azul</option>
    </select> --}}
    {{-- ESTE ES EL METODO CON FORM DE LARAVEL COLECTIVE --}}

    {!! Form::label('color', 'Color:') !!}
    {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}

    @error('color')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
