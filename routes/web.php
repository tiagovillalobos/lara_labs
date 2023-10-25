<?php declare(strict_types=1);

use App\Http\Controllers\SMS\TwilioController;
use App\Http\Controllers\WebSocket\SoketiController;
use Illuminate\Support\Facades\Route;


Route::get(
    uri: '/', 
    action: function () {
        return view('welcome');
    }
);

Route::get(
    uri: 'sms/twilio/send', 
    action: [TwilioController::class, 'send']
)->name(name: 'sms.twilio.send');

Route::get(
    uri: 'soketi', 
    action: [SoketiController::class, 'index']
)->name(name: 'websocket.soketi.index');


Route::get(
    uri: 'test', 
    action: function(){

        return 'Route Used for Quick Testing';

    }
);