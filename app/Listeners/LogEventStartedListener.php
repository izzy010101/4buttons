<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use App\Events\LogEventStarted;

class LogEventStartedListener
{
    public function __construct()
    {
        //
    }

    public function handle(LogEventStarted $event)
    {
        Log::info('Event Started');
    }
}
