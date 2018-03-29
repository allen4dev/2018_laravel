<?php

namespace App\Listeners;

use App\Events\PostWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Support\Facades\Log;

class LogPostInfo
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
     * @param  PostWasCreated  $event
     * @return void
     */
    public function handle(PostWasCreated $event)
    {
        Log::debug("Post {$event->post->id} with title: {$event->post->title}, created by: {$event->post->user->name} at {$event->post->created_at}");
    }
}
