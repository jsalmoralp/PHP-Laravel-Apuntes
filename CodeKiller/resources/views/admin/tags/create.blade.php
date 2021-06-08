@extends('adminlte::page')

@section('title', 'PA - Etiquetas')

@section('content_header')
@can('admin.tags.index')
<a class="float-right btn btn-secondary btn-sm" href="{{route('admin.tags.index')}}">Lista de Etiquetas</a>
@endcan
<h1>Crear Etiqueta</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.tags.store']) !!}
        @include('admin.tags.partials.form')
        {!! Form::submit('Crear nueva Etiqueta', ['class' => 'btn btn-primary']) !!}
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
