<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\JobController;
use App\Events\LogEventStarted;


Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::post('send-test-email', [EmailController::class, 'sendTestEmail'])->name('email.send');


Route::get('send-notification', 'App\Http\Controllers\NotificationController@sendNotification')->name('send.notification');

Route::get('start-job', [JobController::class, 'startJob'])->name('start.job');

Route::get('trigger-event', [EventController::class, 'startEvent'])->name('trigger.event');
