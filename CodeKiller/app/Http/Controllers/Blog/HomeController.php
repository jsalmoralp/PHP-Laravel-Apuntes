<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class HomeController extends Controller
{
    /**
     * Vista principal del Blog
     *
     * Muestra un listado de Artículos que tienen su "status" en publicado
     */
    public function index() {
        $posts = Post::where('status', 2)->latest('id')->paginate(8);

        return view('blog.index', compact('posts'));
    }

    /**
     * Vista de un Artículo del Blog en específico
     *
     * Muestra un Artículo en específico, que en su "status" esta en publicado
     */
    public function show(Post $post) {
        $this->authorize('published', $post);

        $similares = Post::where('category_id', $post->category_id)
                                ->where('status', 2)
                                ->where('id', '!=', $post->id)
                                ->latest('id')
                                ->take(4)
                                ->get();

        return view('blog.show', compact('post', 'similares'));
    }

    /**
     * Vista de una Categoría del Blog
     *
     * Muestra un listado de Artículos de esa Categoría en específico,
     * y que su "status" esta en publicado
     */
    public function category(Category $category) {
        $posts = Post::where('category_id', $category->id)
                            ->where('status', 2)
                            ->latest('id')
                            ->paginate(6);

        return view('blog.category', compact('posts', 'category'));
    }

    /**
     * Vista de una Etiqueta del Blog
     *
     * Muestra un listado de Artículos de esa Etiqueta en específico,
     * y que su "status" esta en publicado
     */
    public function tag(Tag $tag) {
        $posts = $tag->posts()->where('status', 2)->latest('id')->paginate(4);

        return view('blog.tag', compact('posts', 'tag'));
    }
}
