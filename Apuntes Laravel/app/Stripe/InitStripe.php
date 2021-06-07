<?php

namespace App\Stripe;

use Stripe\StripeClient;

class InitStripe {
    public function start() : StripeClient{
        $stripe = new StripeClient(
            env('STRIPE_SECRET')
        );
        /* $stripe->skus->all(['limit' => 3]); */

        return $stripe;
    }
}
