<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\PostRequest;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogTag;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Método Constructor:
     * - Para asignar manualmente los middleware,
     *   a cada uno de los métodos de las rutas
     *   generadas por el método "resource".
     */
    public function __construct()
    {
        $this->middleware('can:admin.blog.posts.index')->only('index');
        $this->middleware('can:admin.blog.posts.create')->only('create', 'store');
        $this->middleware('can:admin.blog.posts.edit')->only('edit', 'update');
        $this->middleware('can:admin.blog.posts.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blog.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BlogCategory::pluck('name', 'id');
        $tags = BlogTag::all();


        return view('admin.blog.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Admin\Blog\PostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = BlogPost::create($request->all());

        if($request->file('file')) {
            $url = Storage::put('blog/posts', $request->file('file'));

            $post->image()->create([
                'url'   => $url
            ]);
        }

        if($request->tags) {
            $post->tags()->attach($request->tags );
        }

        return redirect()->route('admin.blog.posts.edit', $post)
                    ->with('info', 'El Artículo se creó con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogPost $post
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $post)
    {
        return view('admin.blog.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogPost $post
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $post)
    {
        $this->authorize('author', $post);

        $categories = BlogCategory::pluck('name', 'id');
        $tags = BlogTag::all();

        return view('admin.blog.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\Blog\PostRequest  $request
     * @param  \App\Models\BlogPost $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, BlogPost $post)
    {
        $this->authorize('author', $post);

        $post->update($request->all());

        if($request->file('file')) {
            $url = Storage::put('blog/posts', $request->file('file'));

            if($post->image) {
                Storage::delete($post->image->url);

                $post->image->update([
                    'url'   => $url
                ]);
            } else {
                $post->image()->create([
                    'url'   => $url
                ]);
            }
        }

        if($request->tags) {
            $post->tags()->sync($request->tags );
        }

        return redirect()->route('admin.blog.posts.edit', $post)
                    ->with('info', 'El Artículo se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogPost $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $post)
    {
        $this->authorize('author', $post);

        $post->delete();

        return redirect()->route('admin.blog.posts.index')
                    ->with('info', 'El Artículo se eliminó con éxito');
    }
}
