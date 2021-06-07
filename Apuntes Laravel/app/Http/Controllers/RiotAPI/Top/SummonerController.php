<?php

namespace App\Http\Controllers\RiotAPI\Top;

use App\Http\Controllers\Controller;
use App\RiotAPI\InitRiotAPI;
use Illuminate\Http\Request;
use RiotAPI\DataDragonAPI\DataDragonAPI;

class SummonerController extends Controller
{
    public function index() {
        $init = new InitRiotAPI();
        $api = $init->start();

        $data = DataDragonAPI::getSpellIcon('FlashFrost');

        return view('riotPage.top.summoner', compact('data'));
    }
}
