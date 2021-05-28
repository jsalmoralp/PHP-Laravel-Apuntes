@extends('adminlte::page')

@section('title', 'PA - Admin Usuarios')

@section('content_header')
@can('admin.admin.users.index')
<a class="float-right btn btn-secondary btn-sm" href="{{route('admin.admin.users.index')}}">Lista de Usuarios</a>
@endcan
<h1>Blog - Crea Usuario</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.admin.users.store']) !!}
        @include('admin.admin.users.partials.form')
        {!! Form::submit('Crear nuevo Usuario', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@stop

@section('js')
@stop
