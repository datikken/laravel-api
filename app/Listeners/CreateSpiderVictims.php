<?php

namespace App\Listeners;

use App\Events\SpiderCreatedEvent;
use App\Http\Controllers\SpiderController;

class CreateSpiderVictims
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(SpiderController $spiderController)
    {
        $this->spiderController = $spiderController;
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
