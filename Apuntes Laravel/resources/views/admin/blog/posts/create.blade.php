@extends('adminlte::page')

@section('title', 'PA - Blog Artículos')

@section('content_header')
@can('admin.blog.posts.index')
<a class="float-right btn btn-secondary btn-sm" href="{{route('admin.blog.posts.index')}}">Lista de Artículos</a>
@endcan
<h1>Blog - Crear Artículo</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.blog.posts.store', 'autocomplete' => 'off', 'files' => true]) !!}
        @include('admin.blog.posts.partials.form')
        {!! Form::submit('Crear nuevo Artículo', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
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
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
<script>
    $(document).ready( function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
    });

    ClassicEditor
    .create( document.querySelector( '#extract' ) )
    .catch( error => {
        console.error( error );
    } );

    ClassicEditor
    .create( document.querySelector( '#body' ) )
    .catch( error => {
        console.error( error );
    } );

    // Cambiar imagen
    document.getElementById("file").addEventListener('change', cambiarImagen);

    function cambiarImagen(event) {
        var file = event.target.files[0];

        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("picture").setAttribute('src', event.target.result);
        };

        reader.readAsDataURL(file);
    }
</script>
@stop
