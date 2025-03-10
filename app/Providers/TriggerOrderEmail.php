<?php

namespace App\Providers;

use App\Events\CustomerPlacedOrder;
use App\Listeners\SendCustomerEmail;
use Illuminate\Support\ServiceProvider;

class TriggerOrderEmail extends ServiceProvider
{

    protected $listen = [
        CustomerPlacedOrder::class => [
            SendCustomerEmail::class,
        ],
    ];
    // /**
    //  * Register services.
    //  */
    // public function register(): void
    // {
    //     //
    // }

    // /**
    //  * Bootstrap services.
    //  */
    // public function boot(): void
    // {
    //     // No parent boot method to call
    // }
}
