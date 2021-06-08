<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tag;
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
        $tags = Tag::where('name','LIKE', '%' . $this->search . '%')
                    ->latest('id')
                    ->paginate();
        return view('livewire.admin.tags-index', compact('tags'));
    }
}
