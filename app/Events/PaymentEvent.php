<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PaymentEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $email;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->email = 'dmsontung1102@gmail.com';
    }
}
