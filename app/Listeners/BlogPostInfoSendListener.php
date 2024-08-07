<?php

namespace App\Listeners;

use App\Events\BlogPostInfoSendEvent;
use App\Mail\BlogPostInfoSendMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class BlogPostInfoSendListener
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
    public function handle(BlogPostInfoSendEvent $event): void
    {
        foreach ($event->subscribers as $subscriber) {
            Mail::to($subscriber)->send(new BlogPostInfoSendMail($event->blog));
        }
    }
}
