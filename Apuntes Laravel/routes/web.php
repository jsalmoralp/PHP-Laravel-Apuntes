<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

Route::get('/', [HomeController::class, 'tarjetaPresentacion'])
    ->name('tarjetaPresentacion');

Route::get('/homeLaravel', [HomeController::class, 'homeLaravel'])
    ->name('homeLaravel');

Route::get('/homeJetstream', [HomeController::class, 'homeJetstream'])
    ->name('homeJetstream');

Route::get('/login/{driver}', [LoginController::class, 'redirectToProvider'])
    ->name('login.provider.redirect');

Route::get('/login/{driver}/callback', [LoginController::class, 'handleProviderCallback'])
    ->name('login.provider.callback');
