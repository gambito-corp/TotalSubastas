<?php

namespace App\Providers;

use App\Events\SubastaEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class accionSubasta
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
     * @param  SubastaEvent  $event
     * @return void
     */
    public function handle(SubastaEvent $event)
    {
        //
    }
}
