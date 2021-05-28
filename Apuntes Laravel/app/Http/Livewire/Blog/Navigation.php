<?php

namespace App\Http\Livewire\Blog;

use App\Models\BlogCategory;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        $categories = BlogCategory::all();

        return view('livewire.blog.navigation', compact('categories'));
    }
}
