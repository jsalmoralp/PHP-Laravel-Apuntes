<?php

namespace App\Policies;

use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BlogPostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function author(User $user, BlogPost $post) {
        if($user->id == $post->user_id) {
            return true;
        } else {
            return false;
        }
    }

    public function published(?User $user, BlogPost $post) {
        if($post->status == 2) {
            return true;
        } else {
            return false;
        }
    }
}
