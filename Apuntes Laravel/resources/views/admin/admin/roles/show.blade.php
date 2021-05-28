@extends('adminlte::page')

@section('title', 'PA - Admin Roles')

@section('content_header')
@can('admin.admin.roles.index')
<a class="float-right ml-2 btn btn-secondary btn-sm" href="{{route('admin.admin.roles.index')}}">Lista de Roles</a>
@endcan
@can('admin.admin.roles.create')
<a class="float-right ml-2 btn btn-success btn-sm" href="{{route('admin.admin.roles.create')}}">Nuevo Rol</a>
@endcan
@can('admin.admin.roles.edit')
<a class="float-right ml-2 btn btn-primary btn-sm" href="{{route('admin.admin.roles.edit', $role)}}">Editar Rol</a>
@endcan
@can('admin.admin.roles.destroy')
<form action="{{route('admin.admin.roles.destroy', $role)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="float-right ml-2 btn btn-danger btn-sm">Eliminar Rol</button>
</form>
@endcan
<h1>Admin - Detalle del Rol</h1>
@stop

@section('content')
<div class="container py-8 px-28">
    <h2 class="text-4xl font-bold text-gray-600 h1">Permiso:</h2>
    <p>{{$role->name}}</p>
    <h2 class="text-4xl font-bold text-gray-600 h1">Descripción:</h2>
    <p>{{$role->description}}</p>
</div>
@stop

@section('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@stop

@section('js')
@stop
