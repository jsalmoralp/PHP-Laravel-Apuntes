@extends('adminlte::page')

@section('title', 'PA - Admin Usuarios')

@section('content_header')
@can('admin.admin.users.index')
<a class="float-right ml-2 btn btn-secondary btn-sm" href="{{route('admin.admin.users.index')}}">Lista de Usuarios</a>
@endcan
@can('admin.admin.users.create')
<a class="float-right ml-2 btn btn-success btn-sm" href="{{route('admin.admin.users.create')}}">Nuevo Usuario</a>
@endcan
@can('admin.admin.users.destroy')
<form action="{{route('admin.admin.users.destroy', $user)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="float-right ml-2 btn btn-danger btn-sm">Eliminar Usuario</button>
</form>
@endcan
<h1>Admin - Editar Usuario</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
<div class="card">
    <div class="card-body">
        {!! Form::model($user, ['route' => ['admin.admin.users.update', $user], 'method' => 'put']) !!}
        @include('admin.admin.users.partials.form')
        {!! Form::submit('Actualizar Usuario', ['class' => 'btn btn-primary mt-2']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@stop

@section('js')
@stop
