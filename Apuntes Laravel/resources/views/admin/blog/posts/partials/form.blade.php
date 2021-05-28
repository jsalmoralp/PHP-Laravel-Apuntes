<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Artículo']) !!}
    @error('name')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del Artículo', 'readonly']) !!}
    @error('slug')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Categoría:') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Selecciona una Categoría']) !!}
    @error('category_id')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>
    @foreach ($tags as $tag)
    <label class="mr-2">
        {!! Form::checkbox('tags[]', $tag->id, null) !!}
        {{$tag->name}}
    </label>
    @endforeach
    @error('tags')
    <br>
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado:</p>
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
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="mb-3 row">
    <div class="col">
        <diV class="image-wrapper">
            <img id="picture" src="@isset($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2020/03/27/15/33/norway-4973935_960_720.jpg @endisset" alt="">
        </diV>
    </div>
    <div class="col">
        .<div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrará en el Artículo') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            @error('file')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <p>En la previsualización de la Imágen, puede que no se muestre toda entera ya que tendrá una relación de aspecto de "16:9".</p>
        <p>Los tipos de Imágen aceptados son los siguientes:</p>
        <ul>
            <li>".png", ".jpg", ".jpeg"</li>
            <li>Menor de 200Kb</li>
            <li>Cualquier dimensión</li>
        </ul>
    </div>
</div>

<div class="form-group">
    {!! Form::label('extract', 'Extracto:') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
    @error('extract')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('body', 'Cuerpo del Artículo:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    @error('body')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>
