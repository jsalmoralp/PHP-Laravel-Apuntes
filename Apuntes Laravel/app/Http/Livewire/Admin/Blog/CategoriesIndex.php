<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\BlogCategory;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriesIndex extends Component
{
    use WithPagination;

    /* protected $paginationTheme = "bootstrap"; */

    public $search;

    public function updatingSearch() {
        $this->resetPage();
    }

    public function render()
    {
        $categories = BlogCategory::where('name','LIKE', '%' . $this->search . '%')
                    ->latest('id')
                    ->paginate();
        return view('livewire.admin.blog.categories-index', compact('categories'));
    }
}
