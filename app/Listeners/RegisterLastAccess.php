<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login as LoginEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Date;
use Symfony\Component\VarDumper\Cloner\Data;

class RegisterLastAccess
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
     * @param  \App\Events\Login  $event
     * @return void
     */
    public function handle(LoginEvent $event)
    {
        //
        $event->user->lastaccess=Date::now();
        $event->user->save();

    }
}
