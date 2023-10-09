<?php

use App\Http\Controllers\SMS\TwilioController;
use App\Http\Controllers\WebSocket\SoketiController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('sms/twilio/send', [TwilioController::class, 'send'])->name('sms.twilio.send');

Route::get('soketi', [SoketiController::class, 'index'])->name('websocket.soketi.index');