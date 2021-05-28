@extends('adminlte::page')

@section('title', 'PA - Blog Etiquetas')

@section('content_header')
@can('admin.blog.tags.index')
<a class="float-right ml-2 btn btn-secondary btn-sm" href="{{route('admin.blog.tags.index')}}">Lista de Etiquetas</a>
@endcan
@can('admin.blog.tags.create')
<a class="float-right ml-2 btn btn-success btn-sm" href="{{route('admin.blog.tags.create')}}">Nueva Etiqueta</a>
@endcan
@can('admin.blog.tags.edit')
<a class="float-right ml-2 btn btn-primary btn-sm" href="{{route('admin.blog.tags.edit', $tag)}}">Editar Etiqueta</a>
@endcan
@can('admin.blog.tags.destroy')
<form action="{{route('admin.blog.tags.destroy', $tag)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger btn-sm">Eliminar Etiqueta</button>
</form>
@endcan
<h1>Blog - Detalle de la Etiqueta</h1>
@stop

@section('content')
<div class="container py-8 px-28">
    <h1 class="text-4xl font-bold text-gray-600">{{$tag->name}}</h1>
    <div>
        <figure>
            <img class="object-cover object-center w-full h-80" style="object-fit: cover; object-position: center;" width="100%" height="320px" src="@if($tag->image) {{Storage::url($tag->image->url)}} @else https://cdn.pixabay.com/photo/2020/03/27/15/33/norway-4973935_960_720.jpg @endif" alt="">
        </figure>
    </div>
</div>
@stop

@section('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@stop

@section('js')

@stop
