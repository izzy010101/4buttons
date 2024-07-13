<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Notifications\SlackNotification;


class NotificationController extends Controller
{
    public function sendNotification()
    {

    $user = User::find(1);

    if ($user) {
    $user->notify(new SlackNotification($user));
        return redirect()->route('home')->with('success', 'Slack notification sent successfully!');
            } else {
        return redirect()->route('home')->with('error', 'User with ID 1 not found.');
            }
    }
}
