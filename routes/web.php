<?php

use App\Http\Controllers\SMS\TwilioController;
use App\Http\Controllers\WebSocket\SoketiController;
use App\Support\Classes\User;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('sms/twilio/send', [TwilioController::class, 'send'])->name('sms.twilio.send');

Route::get('soketi', [SoketiController::class, 'index'])->name('websocket.soketi.index');


Route::get(
    uri: 'test', 
    action: function(){

        $user = new User(
            name:     'Tiago Villalobos', 
            email:    'tiagolimavillalobos@gmail.com', 
            birthday: '21/04/1988'
        );

        return $user->toJson();

    }
);