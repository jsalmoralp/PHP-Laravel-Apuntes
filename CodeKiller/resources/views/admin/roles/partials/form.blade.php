<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Rol']) !!}
    @error('name')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('description', 'Descripción:') !!}
    {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripción del Rol']) !!}
    @error('description')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <h2 class="h3">Lista de Permisos</h2> {{-- TODO: Hacer buscador con livewire --}}
    @foreach ($permissions as $permission)
    <div>
        <label>
            {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
            <div class="inline-block">
                <p>{{$permission->description}}</p>
                <small>{{$permission->name}}</small>
            </div>
        </label>
    </div>
    @endforeach
    @error('name')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>
