
<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el Nombre o Correo de un Usuario">
    </div>
    @if ($users->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>
                        @can('admin.admin.users.show')
                        <a href="{{route('admin.admin.users.show', $user)}}">{{$user->name}}</a>
                        @else
                        {{$user->name}}
                        @endcan
                    </td>
                    <td>{{$user->email}}</td>
                    <td width="10px">
                        @can('admin.admin.users.edit')
                        <a class="btn btn-primary btn-sm" href="{{route('admin.admin.users.edit', $user)}}">Editar</a>
                        @endcan
                    </td>
                    <td width="10px">
                        @can('admin.admin.users.destroy')
                        <form action="{{route('admin.admin.users.destroy', $user)}}" method="POST">
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
        {{$users->links()}}
    </div>
    @else
    <div class="card-body">
        <strong>No hay registros...</strong>
    </div>
    @endif
</div>

