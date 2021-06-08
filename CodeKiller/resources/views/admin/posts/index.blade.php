@extends('adminlte::page')

@section('title', 'PA - Artículos')

@section('content_header')
@can('admin.posts.create')
<a class="float-right btn btn-success btn-sm" href="{{route('admin.posts.create')}}">Nuevo Artículo</a>
@endcan
<h1>Lista de tus Artículos</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
@livewire('admin.posts-index')
@stop

@section('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@stop

@section('js')

@stop
