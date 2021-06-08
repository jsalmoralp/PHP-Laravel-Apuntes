<?php

namespace App\Http\Livewire\Blog;

use App\Models\Category;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        $categories = Category::all();

        return view('livewire.blog.navigation', compact('categories'));
    }
}
