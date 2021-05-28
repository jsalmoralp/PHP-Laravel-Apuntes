@extends('adminlte::page')

@section('title', 'PA - Blog Categorías')

@section('content_header')
@can('admin.blog.categories.index')
<a class="float-right btn btn-secondary btn-sm" href="{{route('admin.blog.categories.index')}}">Lista de Categorías</a>
@endcan
<h1>Blog - Crear Categoría</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.blog.categories.store']) !!}
            @include('admin.blog.categories.partials.form')
            {!! Form::submit('Crear nueva Categoría', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
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
@stop
