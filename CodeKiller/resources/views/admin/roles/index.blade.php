@extends('adminlte::page')

@section('title', 'PA - Roles')

@section('content_header')
@can('admin.roles.create')
<a class="float-right btn btn-success btn-sm" href="{{route('admin.roles.create')}}">Agregar Rol</a>
@endcan
<h1>Lista de Roles</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
@livewire('admin.roles-index')
@stop

@section('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@stop

@section('js')
@stop
