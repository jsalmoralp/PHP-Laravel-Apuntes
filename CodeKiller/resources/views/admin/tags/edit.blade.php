@extends('adminlte::page')

@section('title', 'PA - Etiquetas')

@section('content_header')
@can('admin.tags.index')
<a class="float-right btn btn-secondary btn-sm" href="{{route('admin.tags.index')}}">Lista de Etiquetas</a>
@endcan
@can('admin.tags.create')
<a class="float-right ml-2 btn btn-success btn-sm" href="{{route('admin.tags.create')}}">Nueva Etiqueta</a>
@endcan
@can('admin.tags.destroy')
<form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="float-right ml-2 btn btn-danger btn-sm">Eliminar Etiqueta</button>
</form>
@endcan
<h1>Editar Etiqueta</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif

<div class="card">
    <div class="card-body">
        {!! Form::model($tag, ['route' => ['admin.tags.update', $tag], 'method' => 'put']) !!}
        @include('admin.tags.partials.form')
        {!! Form::submit('Actualizar Etiqueta', ['class' => 'btn btn-primary']) !!}
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
