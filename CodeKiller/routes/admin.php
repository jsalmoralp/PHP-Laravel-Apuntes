<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;

/**
 * Todos tienen:
 *  - Prefix: "admin/"
 *  - Name: "admin."
 */

Route::get('/', [HomeController::class, 'home'])
    ->name('home');

Route::resource('users', UserController::class)
    ->names('users');

Route::resource('roles', RoleController::class)
    ->names('roles');

Route::resource('permissions', PermissionController::class)
    ->names('permissions');

Route::resource('categories', CategoryController::class)
    ->names('categories');

Route::resource('tags', TagController::class)
    ->names('tags');

Route::resource('posts', PostController::class)
    ->names('posts');
