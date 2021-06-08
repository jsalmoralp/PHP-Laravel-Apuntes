@extends('adminlte::page')

@section('title', 'PA - Categorías')

@section('content_header')
@can('admin.categories.index')
<a class="float-right btn btn-secondary btn-sm" href="{{route('admin.categories.index')}}">Lista de Categorías</a>
@endcan
<h1>Crear Categoría</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.categories.store']) !!}
            @include('admin.categories.partials.form')
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
