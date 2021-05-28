<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de un Artículo">
    </div>
    @if ($posts->count())
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
                @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>
                        @can('admin.blog.posts.show')
                        <a href="{{route('admin.blog.posts.show', $post)}}">{{$post->name}}</a>
                        @else
                        {{$post->name}}
                        @endcan
                    </td>
                    <td width="10px">
                        @can('admin.blog.posts.edit')
                        <a class="btn btn-primary btn-sm" href="{{route('admin.blog.posts.edit', $post)}}">Editar</a>
                        @endcan
                    </td>
                    <td width="10px">
                        @can('admin.blog.posts.destroy')
                        <form action="{{route('admin.blog.posts.destroy', $post)}}">
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
        {{$posts->links()}}
    </div>
    @else
    <div class="card-body">
        <strong>No hay ningún registro...</strong>
    </div>
    @endif
</div>
