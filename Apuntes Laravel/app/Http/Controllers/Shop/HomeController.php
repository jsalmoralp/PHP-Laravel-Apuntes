<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Stripe\InitStripe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $init = new InitStripe();
        $stripe = $init->start();

        $skus = $stripe->skus->all(['limit' => 3]);

        dd($skus);

        return view('shop.index');
    }
}
