<?php

namespace App\Listeners;

use App\Events\PaymentEvent;
use App\Mail\PaymentMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class PaymentListen implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function handle(PaymentEvent $event)
    {
        return Mail::to($event->email)->send(new PaymentMail([]));
    }
}
