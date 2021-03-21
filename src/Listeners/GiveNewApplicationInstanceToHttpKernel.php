<?php

namespace Laravel\Octane\Listeners;

use Illuminate\Contracts\Http\Kernel;

class GiveNewApplicationInstanceToHttpKernel
{
    /**
     * Handle the event.
     *
     * @param  mixed  $event
     * @return void
     */
    public function handle($event)
    {
        $event->sandbox->make(Kernel::class)->setApplication($event->sandbox);
    }
}