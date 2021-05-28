<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\BlogTag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Método Constructor:
     * - Para asignar manualmente los middleware,
     *   a cada uno de los métodos de las rutas
     *   generadas por el método "resource".
     */
    public function __construct()
    {
        $this->middleware('can:admin.blog.tags.index')->only('index');
        $this->middleware('can:admin.blog.tags.create')->only('create', 'store');
        $this->middleware('can:admin.blog.tags.edit')->only('edit', 'update');
        $this->middleware('can:admin.blog.tags.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = BlogTag::paginate();

        return view('admin.blog.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colors = $this->colors();

        return view('admin.blog.tags.create', compact('colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'slug'  => 'required|unique:blog_tags',
            'color' => 'required',
        ]);

        $tag = BlogTag::create($request->all());

        return redirect()->route('admin.blog.tags.edit', compact('tag'))
                    ->with('info', 'La Etiqueta se creó con éxtito');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogTag $tag
     * @return \Illuminate\Http\Response
     */
    public function show(BlogTag $tag)
    {
        return view('admin.blog.tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogTag $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogTag $tag)
    {
        $colors = $this->colors();

        return view('admin.blog.tags.edit', compact('tag', 'colors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogTag $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogTag $tag)
    {
        $request->validate([
            'name'  => 'required',
            'slug'  => "required|unique:blog_tags,slug,$tag->id",
            'color' => 'required',
        ]);

        $tag->update($request->all());

        return redirect()->route('admin.blog.tags.edit', $tag)
                    ->with('info', 'La Etiqueta se actualizó con éxtito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogTag $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogTag $tag)
    {
        $tag->delete();

        return redirect()->route('admin.blog.tags.index')
                    ->with('info', 'La Etiqueta se eliminó con éxtito');
    }

    /**
     * Listado de colores disponibles para el "select",
     * de las vistas de con el formulario de "create" y "edit".
     */
    public function colors() {
        $colors = [
            'red'       => 'Color rojo',
            'yellow'    => 'Color amarillo',
            'green'     => 'Color verde',
            'blue'      => 'Color azul',
            'indigo'    => 'Color indigo',
            'purple'    => 'Color morado',
            'pink'      => 'Color rosado'
        ];

        return $colors;
    }
}
