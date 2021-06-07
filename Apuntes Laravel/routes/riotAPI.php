<?php

use App\Http\Controllers\RiotAPI\Top\SummonerController as TopSummonerController;
use Illuminate\Support\Facades\Route;

/**
 * Todos tienen:
 *  - Prefix: "riotAPI/"
 *  - Name: "riotAPI."
 */

Route::prefix('/top')->name('top')->group(function () {
    Route::get('/summoners', [TopSummonerController::class, 'index'])->name('summoners');
});
