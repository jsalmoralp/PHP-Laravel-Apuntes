<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el Nombre de un Rol">
    </div>
    @if ($roles->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Rol</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>
                        @can('admin.roles.show')
                        <a href="{{route('admin.roles.show', $role)}}">{{$role->name}}</a>
                        @else
                        {{$role->name}}
                        @endcan
                    </td>
                    <td width="10px">
                        @can('admin.roles.edit')
                        <a class="btn btn-primary btn-sm" href="{{route('admin.roles.edit', $role)}}">Editar</a>
                        @endcan
                    </td>
                    <td width="10px">
                        @can('admin.roles.destroy')
                        <form action="{{route('admin.roles.destroy', $role)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                        @endcan
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$roles->links()}}
    </div>
    @else
    <div class="card-body">
        <strong>No hay registros...</strong>
    </div>
    @endif
</div>

