@extends('adminlte::page')

@section('title', 'PA - Roles')

@section('content_header')
@can('admin.roles.index')
<a class="float-right btn btn-secondary btn-sm" href="{{route('admin.roles.index')}}">Lista de Roles</a>
@endcan
<h1>Crea Rol</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.roles.store']) !!}
        @include('admin.roles.partials.form')
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
