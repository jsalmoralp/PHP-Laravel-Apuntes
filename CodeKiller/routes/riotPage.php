<?php

use App\Http\Controllers\RiotPage\HomeController;
use Illuminate\Support\Facades\Route;

/**
 * Todos tienen:
 *  - Prefix: "riotAPI/"
 *  - Name: "riotAPI."
 */

Route::prefix('/top')->name('top.')->group(function () {
    Route::get('/summoners', [HomeController::class, 'top_summoners'])->name('summoners');
    Route::get('/champions', [HomeController::class, 'top_champions'])->name('champions');
});
