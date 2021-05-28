@extends('adminlte::page')

@section('title', 'PA - Admin Roles')

@section('content_header')
@can('admin.admin.roles.index')
<a class="float-right btn btn-secondary btn-sm" href="{{route('admin.admin.roles.index')}}">Lista de Roles</a>
@endcan
<h1>Blog - Crea Rol</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.admin.roles.store']) !!}
        @include('admin.admin.roles.partials.form')
        {!! Form::submit('Crear nuevo Rol', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@stop

@section('js')
@stop
