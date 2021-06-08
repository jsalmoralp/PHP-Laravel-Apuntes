@extends('adminlte::page')

@section('title', 'PA - Categorías')

@section('content_header')
@can('admin.categories.index')
<a class="float-right btn btn-secondary btn-sm" href="{{route('admin.categories.index')}}">Lista de Categorías</a>
@endcan
@can('admin.categories.create')
<a class="float-right ml-2 btn btn-success btn-sm" href="{{route('admin.categories.create')}}">Nueva Categoría</a>
@endcan
@can('admin.categories.destroy')
<form action="{{route('admin.categories.destroy', $category)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="float-right ml-2 btn btn-danger btn-sm">Eliminar Categoría</button>
</form>
@endcan
<h1>Editar Categoría</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
<div class="card">
    <div class="card-body">
        {!! Form::model($category, ['route' => ['admin.categories.update', $category], 'method' => 'put']) !!}
        @include('admin.categories.partials.form')
        {!! Form::submit('Actualizar Categoría', ['class' => 'btn btn-primary']) !!}
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
