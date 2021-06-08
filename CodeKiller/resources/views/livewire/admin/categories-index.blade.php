<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de una Categoría">
    </div>
    @if ($categories->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>
                        @can('admin.categories.show')
                        <a href="{{route('admin.categories.show', $category)}}">{{$category->name}}</a>
                        @else
                        {{$category->name}}
                        @endcan
                    </td>
                    <td width='10px'>
                        @can('admin.categories.edit')
                        <a class="btn btn-primary btn-sm" href="{{route('admin.categories.edit', $category)}}">Editar</a>
                        @endcan
                    </td>
                    <td width='10px'>
                        @can('admin.categories.destroy')
                        <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
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
        {{$categories->links()}}
    </div>
    @else
    <div class="card-body">
        <strong>No hay ningún registro...</strong>
    </div>
    @endif
</div>
