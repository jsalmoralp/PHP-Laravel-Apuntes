<?php

use App\Http\Controllers\Admin\Admin\PermissionController;
use App\Http\Controllers\Admin\Admin\RoleController;
use App\Http\Controllers\Admin\Admin\UserController;
use App\Http\Controllers\Admin\Blog\CategoryController;
use App\Http\Controllers\Admin\Blog\PostController;
use App\Http\Controllers\Admin\Blog\TagController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

// Ruta del Home de Panel de Administración
Route::get('/', [HomeController::class, 'home'])
    ->middleware('can:admin.home')
    ->name('admin.home');

/**
 * Rutas para el Administrador
 */
Route::resource('admin/users', UserController::class)
    ->names('admin.admin.users');

Route::resource('admin/roles', RoleController::class)
    ->names('admin.admin.roles');

Route::resource('admin/permissions', PermissionController::class)
    ->names('admin.admin.permissions');

/**
 * Rutas para el Blog
 */
Route::resource('blog/categories', CategoryController::class)
    ->names('admin.blog.categories');

Route::resource('blog/tags', TagController::class)
    ->names('admin.blog.tags');

Route::resource('blog/posts', PostController::class)
    ->names('admin.blog.posts');

// [END] Rutas para el Blog

