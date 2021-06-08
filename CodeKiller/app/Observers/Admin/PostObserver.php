<?php

namespace App\Observers\Admin;

use App\Models\Post;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class PostObserver
{
    /**
     * Evento que se ejecuta antes de crear el Post,
     * con el metodo "create()".
     *
     * @param  Post  $Post
     * @return void
     */
    public function creating(Post $post)
    {
        if(! App::runningInConsole()) {
            $post->user_id = auth()->user()->id;
        }
    }

    /**
     * Handle the Post "created" event.
     *
     * @param  Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        //
    }

    /**
     * Handle the Post "updated" event.
     *
     * @param  Post  $post
     * @return void
     */
    public function updated(Post $post)
    {
        //
    }

    /**
     * Evento que se ejecuta antes de eliminar el Post,
     * con el metodo "delete()".
     *
     * @param  Post  $post
     * @return void
     */
    public function deleting(Post $post)
    {
        if($post->image) {
            Storage::delete($post->image->url);
        }
    }

    /**
Post     *
     * @param  Post  $post
     * @return void
     */
    public function deleted(Post $post)
    {
        //
    }

    /**
     * Handle the Post "restored" event.
     *
     * @param  Post  $post
     * @return void
     */
    public function restored(Post $post)
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     *
     * @param  Post  $post
     * @return void
     */
    public function forceDeleted(Post $post)
    {
        //
    }
}
