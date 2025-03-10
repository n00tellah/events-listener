<?php

namespace App\Listeners;

use App\Mail\CustomerOrderPlaced;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Events\CustomerPlacedOrder;

class SendCustomerEmail
{
    /**
     * Create the event listener.
     */
    public $order;

    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * Handle the event.
     */
    public function handle(CustomerPlacedOrder $event): void
    {
        Mail::to($event->order->customer->email)->send(new CustomerOrderPlaced($event->order));
    }
}
