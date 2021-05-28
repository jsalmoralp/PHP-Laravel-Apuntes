@extends('adminlte::page')

@section('title', 'PA - Admin Usuarios')

@section('content_header')
@can('admin.admin.users.index')
<a class="float-right ml-2 btn btn-secondary btn-sm" href="{{route('admin.admin.users.index')}}">Lista de Usuarios</a>
@endcan
@can('admin.admin.users.create')
<a class="float-right ml-2 btn btn-success btn-sm" href="{{route('admin.admin.users.create')}}">Nuevo Usuario</a>
@endcan
@can('admin.admin.users.edit')
<a class="float-right ml-2 btn btn-primary btn-sm" href="{{route('admin.admin.users.edit', $user)}}">Editar Usuario</a>
@endcan
@can('admin.admin.users.destroy')
<form action="{{route('admin.admin.users.destroy', $user)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="float-right ml-2 btn btn-danger btn-sm">Eliminar Usuario</button>
</form>
@endcan
<h1>Admin - Detalle del Usuario</h1>
@stop

@section('content')
<div class="container py-8 px-28">
    <figure>
        <img class="object-cover object-center w-full h-80" src="@if($user->profile_photo_url) {{$user->profile_photo_url)}} @else https://cdn.pixabay.com/photo/2020/03/27/15/33/norway-4973935_960_720.jpg @endif" alt="{{$user->name}}">
    </figure>
    <h1 class="text-4xl font-bold text-gray-600 h1">Nombre: <span class="h5">{{$user->name}}</span></h1>
    <h2 class="text-4xl font-bold text-gray-600 h1">Email: <span class="h5">{{$user->email}}</span></h2>
</div>
@stop

@section('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@stop

@section('js')
@stop
