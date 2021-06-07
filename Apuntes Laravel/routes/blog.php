<?php

use App\Http\Controllers\Blog\PostController;
use Illuminate\Support\Facades\Route;


/**
 * Todos tienen:
 *  - Prefix: "blog/"
 *  - Name: "blog."
 */

Route::get('/', [PostController::class, 'index'])
    ->name('index');

Route::get('posts/{post}', [PostController::class, 'show'])
    ->name('show');

Route::get('category/{category}', [PostController::class, 'category'])
    ->name('category');

Route::get('tag/{tag}', [PostController::class, 'tag'])
    ->name('tag');
