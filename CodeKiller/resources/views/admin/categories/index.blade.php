@extends('adminlte::page')

@section('title', 'PA - Categorías')

@section('content_header')
@can('admin.categories.create')
<a class="float-right btn btn-success btn-sm" href="{{route('admin.categories.create')}}">Agregar Categoría</a>
@endcan
<h1>Lista de Categorías</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
@livewire('admin.categories-index')
@stop

@section('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@stop

@section('js')

@stop
