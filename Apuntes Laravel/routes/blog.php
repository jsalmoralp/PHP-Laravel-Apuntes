<?php

use App\Http\Controllers\Blog\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class, 'index'])
    ->name('blog.index');

Route::get('posts/{post}', [PostController::class, 'show'])
    ->name('blog.show');

Route::get('category/{category}', [PostController::class, 'category'])
    ->name('blog.category');

Route::get('tag/{tag}', [PostController::class, 'tag'])
    ->name('blog.tag');
