<?php

namespace App\Listeners;

use App\Events\SpiderCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateSpiderVictims
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $a = 'foo23';
        dd($a);
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\SpiderCreatedEvent  $event
     * @return void
     */
    public function handle(SpiderCreatedEvent $event)
    {
        //
    }
}
