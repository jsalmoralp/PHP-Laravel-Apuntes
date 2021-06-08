<?php

use App\Http\Controllers\Shop\HomeController;
use Illuminate\Support\Facades\Route;

/**
 * Todos tienen:
 *  - Prefix: "shop/"
 *  - Name: "shop."
 */

Route::get('/', [HomeController::class, 'index'])
    ->name('index');
