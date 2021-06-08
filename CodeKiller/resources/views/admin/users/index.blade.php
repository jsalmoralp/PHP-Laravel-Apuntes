@extends('adminlte::page')

@section('title', 'PA - Usuarios')

@section('content_header')
@can('admin.users.create')
<a class="float-right btn btn-success btn-sm" href="{{route('admin.users.create')}}">Agregar Usuario</a>
@endcan
<h1>Lista de Usuarios</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
@livewire('admin.users-index')
@stop

@section('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@stop

@section('js')
@stop
