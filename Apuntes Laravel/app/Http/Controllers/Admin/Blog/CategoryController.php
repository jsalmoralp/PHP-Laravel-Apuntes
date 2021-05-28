<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Método Constructor:
     * - Para asignar manualmente los middleware,
     *   a cada uno de los métodos de las rutas
     *   generadas por el método "resource".
     */
    public function __construct()
    {
        $this->middleware('can:admin.blog.categories.index')->only('index');
        $this->middleware('can:admin.blog.categories.create')->only('create', 'store');
        $this->middleware('can:admin.blog.categories.edit')->only('edit', 'update');
        $this->middleware('can:admin.blog.categories.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = BlogCategory::paginate();

        return view('admin.blog.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.categories.create');
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
            'slug'  => 'required|unique:blog_categories'
        ]);

        $category = BlogCategory::create($request->all());

        return redirect()->route('admin.blog.categories.edit', $category)
                    ->with('info', 'La Categoría se creó con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogCategory  $category
     * @return \Illuminate\Http\Response
     */
    public function show(BlogCategory $category)
    {
        return view('admin.blog.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogCategory  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCategory $category)
    {
        return view('admin.blog.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogCategory  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogCategory $category)
    {
        $request->validate([
            'name'  => 'required',
            'slug'  => "required|unique:blog_categories,slug,$category->id"
        ]);

        $category->update($request->all());

        return redirect()->route('admin.blog.categories.edit', $category)
                    ->with('info', 'La Categoría se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogCategory  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCategory $category)
    {
        $category->delete();

        return redirect()->route('admin.blog.categories.index')
                    ->with('info', 'La Categoría se eliminó con éxito');
    }
}
