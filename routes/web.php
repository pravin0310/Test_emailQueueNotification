<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\SendEmailQueueJob;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-email', function () {
    $details = [
        'email' => 'admin@example.com',
        'title' => 'Hello Hi There!',
        'body' => 'This is the Demo checking'
    ];

    SendEmailQueueJob::dispatch($details);

    // return response()->json(['message' => 'Email is being sent.']);
    return view('mailNotification', ['message' => $details]);
});
