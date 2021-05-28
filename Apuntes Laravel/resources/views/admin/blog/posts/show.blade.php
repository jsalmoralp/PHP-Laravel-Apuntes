@extends('adminlte::page')

@section('title', 'PA - Blog Artículos')

@section('content_header')
@can('admin.blog.posts.index')
<a class="float-right ml-2 btn btn-secondary btn-sm" href="{{route('admin.blog.posts.index')}}">Lista de Artículo</a>
@endcan
@can('admin.blog.posts.create')
<a class="float-right ml-2 btn btn-success btn-sm" href="{{route('admin.blog.posts.create')}}">Nuevo Artículo</a>
@endcan
@can('admin.blog.posts.edit')
<a class="float-right ml-2 btn btn-primary btn-sm" href="{{route('admin.blog.posts.edit', $post)}}">Editar Artículo</a>
@endcan
@can('admin.blog.posts.destroy')
<form action="{{route('admin.blog.posts.destroy', $post)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="float-right ml-2 btn btn-danger btn-sm">Eliminar Artículo</button>
</form>
@endcan
<h1>Blog - Detalle del Artículo</h1>
@stop

@section('content')
<div class="container py-8 px-28">
    <h1 class="text-4xl font-bold text-gray-600">{{$post->name}}</h1>

    <div class="mb-2 text-lg text-gary-500">
        {!!$post->extract!!}
    </div>
    <div>
        <figure>
            <img class="object-cover object-center w-full h-80" src="@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2020/03/27/15/33/norway-4973935_960_720.jpg @endif" alt="">
        </figure>
        <div class="mt-4 mb-16 text-gray-500 mb-text-base">
            {!!$post->body!!}
        </div>
    </div>
</div>
@stop

@section('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@stop

@section('js')

@stop
