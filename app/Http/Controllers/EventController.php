<?php

namespace App\Http\Controllers;

use App\Events\LogEventStarted;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function startEvent()
    {
        event(new LogEventStarted());
        return redirect()->route('home')->with('success', 'Event started');
    }
}
