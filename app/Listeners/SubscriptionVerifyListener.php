<?php

namespace App\Listeners;

use App\Events\SubscriptionVerifyEvent;
use App\Mail\SubscriptionVerifyEmail;
use App\Notifications\SubscriptionNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SubscriptionVerifyListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SubscriptionVerifyEvent $event): void
    {
        Mail::to($event->email)->send(new SubscriptionVerifyEmail($event->token));
    }
}
