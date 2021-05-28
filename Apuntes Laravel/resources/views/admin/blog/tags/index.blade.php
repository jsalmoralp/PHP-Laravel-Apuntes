@extends('adminlte::page')

@section('title', 'PA - Blog Etiquetas')

@section('content_header')
@can('admin.blog.tags.create')
<a class="float-right btn btn-success btn-sm" href="{{route('admin.blog.tags.create')}}">Agregar Etiqueta</a>
@endcan

<h1>Blog - Lista de Etiquetas</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
@livewire('admin.blog.tags-index')
@stop

@section('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@stop

@section('js')

@stop
