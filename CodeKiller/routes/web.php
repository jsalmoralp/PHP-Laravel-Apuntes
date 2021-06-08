<?php

use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'tarjetaPresentacion'])
    ->name('tarjetaPresentacion');

Route::get('/homeLaravel', [HomeController::class, 'homeLaravel'])
    ->name('homeLaravel');

Route::get('/homeJetstream', [HomeController::class, 'homeJetstream'])
    ->name('homeJetstream');

Route::get('/login/{driver}', [SocialLoginController::class, 'redirectToProvider'])
    ->name('login.provider.redirect');

Route::get('/login/{driver}/callback', [SocialLoginController::class, 'handleProviderCallback'])
    ->name('login.provider.callback');



/*
 * Para indicar que solo queremos ciertas rutas, cuando
 * se auto-generen las rutas con el método "resource".
 *
Route::resource('users', UserController::class)
    ->only(['index', 'edit', 'update'])
    ->names('admin.users');
Route::resource('users', UserController::class)
    ->except('show')
    ->names('admin.users');
*/
