<?php

namespace App\Listeners;

use App\Events\UserWasBanned;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNotification
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

    /**
     * Handle the event.
     *
     * @param  UserWasBanned  $event
     * @return void
     */
    public function handle(UserWasBanned $event)
    {
        dd("Dear {$event->user->name} unfortunally your account was suspended.");
    }
}
