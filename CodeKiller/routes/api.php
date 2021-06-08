<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * Todos tienen:
 *  - Prefix: "api/"
 *  - Name: "api."
 */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
