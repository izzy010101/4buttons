<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;
use App\Models\User;

class EmailController extends Controller
{
    public function sendTestEmail()
    {
        // Get the admin email from the database
        $admin = User::where('email', 'admin@admin.com')->first();

        if ($admin) {
            Mail::to($admin->email)->send(new TestEmail('Test email to Admin mail with Mailtrap.'));

            return redirect()->route('home')->with('success', 'Email sent successfully');
        } else {
            return redirect()->route('home')->with('error', 'Email not sent, try again later');
        }
    }
}
