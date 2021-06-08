@extends('adminlte::page')

@section('title', 'PA - Categorías')

@section('content_header')
@can('admin.categories.index')
<a class="float-right ml-2 btn btn-secondary btn-sm" href="{{route('admin.categories.index')}}">Lista de Categorías</a>
@endcan
@can('admin.categories.create')
<a class="float-right ml-2 btn btn-success btn-sm" href="{{route('admin.categories.create')}}">Nueva Categoría</a>
@endcan
@can('admin.categories.edit')
<a class="float-right ml-2 btn btn-primary btn-sm" href="{{route('admin.categories.edit', $category)}}">Editar Categoría</a>
@endcan
@can('admin.categories.destroy')
<form action="{{route('admin.categories.destroy', $category)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="float-right ml-2 btn btn-danger btn-sm">Eliminar Categoría</button>
</form>
@endcan
<h1>Detalle de la Categoría</h1>
@stop

@section('content')
<div class="container py-8 px-28">
    <h1 class="text-4xl font-bold text-gray-600">{{$category->name}}</h1>
    <div>
        <figure>
            <img class="object-cover object-center w-full h-80" src="@if($category->image) {{Storage::url($category->image->url)}} @else https://cdn.pixabay.com/photo/2020/03/27/15/33/norway-4973935_960_720.jpg @endif" alt="">
        </figure>
    </div>
</div>
@stop

@section('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@stop

@section('js')

@stop
