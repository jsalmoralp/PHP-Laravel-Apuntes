<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\BlogPost;
use Livewire\Component;
use Livewire\WithPagination;

class PostsIndex extends Component
{
    use WithPagination;

    /* protected $paginationTheme = "bootstrap"; */

    public $search;

    public function updatingSearch() {
        $this->resetPage();
    }

    public function render()
    {
        $posts = BlogPost::where('user_id', auth()->user()->id)
                            ->where('name','LIKE', '%' . $this->search . '%')
                            ->latest('id')
                            ->paginate();

        return view('livewire.admin.blog.posts-index', compact('posts'));
    }
}
