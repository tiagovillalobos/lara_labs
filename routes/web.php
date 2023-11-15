<?php declare(strict_types=1);

use App\DataStructure\List\LinkedList;
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

        $linkedList = new LinkedList();

        $linkedList->push(1);
        $linkedList->push(2);
        $linkedList->push(3);
        $linkedList->push(4);

        $linkedList->pop();

        $head = $linkedList->getHead();

        while($head !== null){
            echo $head->getValue() . '<br>';
            $head = $head->getNext();
        }

    }
);