<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}
    @error('name')
        <small class="text-danger"> {{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingrese el slug del post',
        'readonly',
    ]) !!}

    @error('slug')
        <small class="text-danger"> {{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Categoria') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
    @error('category_id')
        <small class="text-danger"> {{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>
    @foreach ($tags as $tag)
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{ $tag->name }}
        </label>
    @endforeach


    @error('tags')
        <br>
        <small class="text-danger"> {{ $message }}</small>
    @enderror
</div>

{{-- VAMOS A AGREGAR UN STATUS PARA QUE NOS PERMITA VER SI ESTA EN PUBLICADO O EN BORRADOR --}}

<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label>
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <label>
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>


    @error('status')
        <br>
        <small class="text-danger"> {{ $message }}</small>
    @enderror
</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            {{-- ACA VAMOS A HACER QUE APAREZCA LA IMAGEN SI TIENE UNA YA PUESTA EN EL, Y SI NO QUE COLOQUE UNA PREDETERMINADA --}}
            {{-- ACA NO VAMOS A USAR IF SI NO ISSET, o en dado caso nos estaria tirando un error --}}
            @isset ($post->image)
                <img id="picture" src="{{ Storage::url($post->image->url) }}">
            @else
                <img id="picture"
                    src="https://cdn.pixabay.com/photo/2016/10/09/08/32/digital-marketing-1725340_1280.jpg">
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrara en el post') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            @error('file')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet inventore fugiat repellendus dolor nobis?
        Consectetur provident repellendus ad. Qui nostrum molestias quod? Assumenda odio esse officia obcaecati
        enim blanditiis consequatur.
    </div>
</div>

{{--  VAMOS A AGREGARLE UN TEXTO ENRIQUECIDO ENTONCES OCUPAMOS AGREGARLE UN PLUGGIN LLAMADO
SECAEDITOR --}}

<div class="form-group">
    {!! Form::label('extract', 'Extracto:') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

    @error('extract')
        <small class="text-danger"> {{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('body', 'Cuerpo del post:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

    @error('body')
        <small class="text-danger"> {{ $message }}</small>
    @enderror
</div>
