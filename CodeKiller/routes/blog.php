<?php

use App\Http\Controllers\Blog\HomeController;
use Illuminate\Support\Facades\Route;


/**
 * Todos tienen:
 *  - Prefix: "blog/"
 *  - Name: "blog."
 */

Route::get('/', [HomeController::class, 'index'])
    ->name('index');

Route::get('posts/{post}', [HomeController::class, 'show'])
    ->name('show');

Route::get('category/{category}', [HomeController::class, 'category'])
    ->name('category');

Route::get('tag/{tag}', [HomeController::class, 'tag'])
    ->name('tag');
