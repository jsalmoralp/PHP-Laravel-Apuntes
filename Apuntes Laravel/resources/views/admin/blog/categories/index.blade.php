@extends('adminlte::page')

@section('title', 'PA - Blog Categorías')

@section('content_header')
@can('admin.blog.categories.create')
<a class="float-right btn btn-success btn-sm" href="{{route('admin.blog.categories.create')}}">Agregar Categoría</a>
@endcan
<h1>Blog - Lista de Categorías</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
@livewire('admin.blog.categories-index')
@stop

@section('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@stop

@section('js')

@stop
