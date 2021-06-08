<?php

namespace App\Http\Controllers\RiotPage;

use App\Http\Controllers\Controller;
use RiotAPI\DataDragonAPI\DataDragonAPI;

class HomeController extends Controller
{
    public function top_summoners() {
        $init = new InitRiotAPI();
        $api = $init->start();

        $data = DataDragonAPI::getSpellIcon('FlashFrost');

        return view('riotPage.top-summoner', compact('data'));
    }

    public function top_champions() {
        $init = new InitRiotAPI();
        $api = $init->start();

        $data = DataDragonAPI::getSpellIcon('FlashFrost');

        return view('riotPage.top-champion', compact('data'));
    }
}
