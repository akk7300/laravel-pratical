<?php

namespace App\Providers;

use App\Providers\NewFormCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNotiMail
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
     * @param  \App\Providers\NewFormCreated  $event
     * @return void
     */
    public function handle(NewFormCreated $event)
    {
        //
    }
}
