<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\BlogTag;
use Livewire\Component;
use Livewire\WithPagination;

class TagsIndex extends Component
{
    use WithPagination;

    /* protected $paginationTheme = "bootstrap"; */

    public $search;

    public function updatingSearch() {
        $this->resetPage();
    }

    public function render()
    {
        $tags = BlogTag::where('name','LIKE', '%' . $this->search . '%')
                    ->latest('id')
                    ->paginate();
        return view('livewire.admin.blog.tags-index', compact('tags'));
    }
}
