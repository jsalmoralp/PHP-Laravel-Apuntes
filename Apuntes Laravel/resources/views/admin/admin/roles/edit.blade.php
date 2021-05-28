@extends('adminlte::page')

@section('title', 'PA - Admin Roles')

@section('content_header')
@can('admin.admin.roles.index')
<a class="float-right ml-2 btn btn-secondary btn-sm" href="{{route('admin.admin.roles.index')}}">Lista de Roles</a>
@endcan
@can('admin.admin.roles.create')
<a class="float-right ml-2 btn btn-success btn-sm" href="{{route('admin.admin.roles.create')}}">Nuevo Rol</a>
@endcan
@can('admin.admin.roles.destroy')
<form action="{{route('admin.admin.roles.destroy', $role)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="float-right ml-2 btn btn-danger btn-sm">Eliminar Rol</button>
</form>
@endcan
<h1>Admin - Editar Rol</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
<div class="card">
    <div class="card-body">
        {!! Form::model($role, ['route' => ['admin.admin.roles.update', $role], 'method' => 'put']) !!}
        @include('admin.admin.roles.partials.form')
        {!! Form::submit('Actualizar Rol', ['class' => 'btn btn-primary mt-2']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@stop

@section('js')
@stop
