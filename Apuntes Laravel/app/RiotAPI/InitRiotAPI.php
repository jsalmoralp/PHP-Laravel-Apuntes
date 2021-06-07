<?php

namespace App\RiotAPI;

use Illuminate\Support\Facades\App;
use RiotAPI\LeagueAPI\Definitions\Cache;
use RiotAPI\LeagueAPI\Definitions\Region;
use RiotAPI\LeagueAPI\LeagueAPI;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

class InitRiotAPI {
    public function start(
        Region $region = Region::EUROPE_WEST,
        String $locale = 'es_ES'
    ) : LeagueAPI{
        // Cache provider control class
        $cacheProvider = FilesystemAdapter::class;
        // Cache provider params for LeagueAPI library instance
        $leagueapiParams = [
            Cache::LEAGUEAPI_NAMESPACE, // cache namespace
            Cache::LIFETIME,            // default lifetime
            Cache::getDirectoryPath()   // target cache directory
        ];
        // Cache provider params for DataDragonAPI library instance
        $datadragonParams = [
            Cache::DATADRAGON_NAMESPACE, // cache namespace
            Cache::LIFETIME,             // default lifetime
            Cache::getDirectoryPath()    // target cache directory
        ];
        //  Library initialization
        $api = new LeagueAPI([
            LeagueAPI::SET_KEY              => env('RIOT_API_KEY'),
            LeagueAPI::SET_REGION           => $region,
            LeagueAPI::SET_VERIFY_SSL       => (App::environment('local')?false:true),

            LeagueAPI::SET_CACHE_PROVIDER           => $cacheProvider,
	        LeagueAPI::SET_CACHE_PROVIDER_PARAMS    => $leagueapiParams,
	        LeagueAPI::SET_DD_CACHE_PROVIDER_PARAMS => $datadragonParams,

            LeagueAPI::SET_CACHE_RATELIMIT  => true,
            LeagueAPI::SET_CACHE_CALLS      => true,

            LeagueAPI::SET_DATADRAGON_INIT  => true,
            LeagueAPI::SET_STATICDATA_LINKING => true,
            LeagueAPI::SET_STATICDATA_LOCALE => $locale
        ]);

        return $api;
    }
}
