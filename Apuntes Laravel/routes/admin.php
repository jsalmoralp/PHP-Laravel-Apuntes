<?php

use App\Http\Controllers\Admin\Admin\PermissionController;
use App\Http\Controllers\Admin\Admin\RoleController;
use App\Http\Controllers\Admin\Admin\UserController;
use App\Http\Controllers\Admin\Blog\CategoryController;
use App\Http\Controllers\Admin\Blog\PostController;
use App\Http\Controllers\Admin\Blog\TagController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

/**
 * Todos tienen:
 *  - Prefix: "admin/"
 *  - Name: "admin."
 */

// Ruta del Home de Panel de Administración
Route::get('/', [HomeController::class, 'home'])
    ->middleware('can:admin.home')
    ->name('home');

/**
 * Rutas para el Administrador
 */
Route::resource('admin/users', UserController::class)
    ->names('admin.users');

Route::resource('admin/roles', RoleController::class)
    ->names('admin.roles');

Route::resource('admin/permissions', PermissionController::class)
    ->names('admin.permissions');

/**
 * Rutas para el Blog
 */
Route::resource('blog/categories', CategoryController::class)
    ->names('blog.categories');

Route::resource('blog/tags', TagController::class)
    ->names('blog.tags');

Route::resource('blog/posts', PostController::class)
    ->names('blog.posts');

// [END] Rutas para el Blog

