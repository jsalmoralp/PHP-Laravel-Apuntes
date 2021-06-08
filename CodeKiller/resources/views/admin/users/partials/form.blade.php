{{-- <div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Usuario']) !!}
    @error('name')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('email', 'Correo:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Correo del Usuario']) !!}
    @error('email')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('password', 'Contraseña:') !!}
    {!! Form::password('password', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Contraseña del Usuario']) !!}
    {!! Form::checkbox('toPasswordUpdate', '1', null, ['class' => 'mr-1']) !!}
    <small class="text-sm text-gray-500">Checkear para agregar o cambiar la contraseña.</small>
    @error('password')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div> --}}

<h2 class="h2">Nombre:</h2>
<p class="text-lg">{{$user->name}}</p>
<h2 class="h2">Correo:</h2>
<p class="text-lg">{{$user->email}}</p>

<h2 class="h2">Roles:</h2>
<div class="form-group">
    @foreach ($roles as $role)
    <label for="">
        {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
        {{$role->name}}
    </label>
    @endforeach
</div>
