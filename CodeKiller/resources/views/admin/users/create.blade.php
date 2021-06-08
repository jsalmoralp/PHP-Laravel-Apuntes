@extends('adminlte::page')

@section('title', 'PA - Usuarios')

@section('content_header')
@can('admin.users.index')
<a class="float-right btn btn-secondary btn-sm" href="{{route('admin.users.index')}}">Lista de Usuarios</a>
@endcan
<h1>Crea Usuario</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.users.store']) !!}
        @include('admin.users.partials.form')
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
