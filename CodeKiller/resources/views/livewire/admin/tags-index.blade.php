<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de una Etiqueta">
    </div>
    @if ($tags->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Color</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                <tr>
                    <td>{{$tag->id}}</td>
                    <td>
                        @can('admin.tags.show')
                        <a href="{{route('admin.tags.show', $tag)}}">{{$tag->name}}</a>
                        @else
                        {{$tag->name}}
                        @endcan
                    </td>
                    <td>{{$tag->color}}</td>
                    <td width='10px'>
                        @can('admin.tags.edit')
                        <a class="btn btn-primary btn-sm" href="{{route('admin.tags.edit', $tag)}}">Editar</a>
                        @endcan
                    </td>
                    <td width='10px'>
                        @can('admin.tags.destroy')
                        <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
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
        {{$tags->links()}}
    </div>
    @else
    <div class="card-body">
        <strong>No hay ningún registro...</strong>
    </div>
    @endif
</div>
