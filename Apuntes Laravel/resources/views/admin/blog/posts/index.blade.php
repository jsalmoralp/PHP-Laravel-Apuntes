@extends('adminlte::page')

@section('title', 'PA - Blog Artículos')

@section('content_header')
@can('admin.blog.posts.create')
<a class="float-right btn btn-success btn-sm" href="{{route('admin.blog.posts.create')}}">Nuevo Artículo</a>
@endcan
<h1>Blog - Lista de Artículos</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
@livewire('admin.blog.posts-index')
@stop

@section('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@stop

@section('js')

@stop
