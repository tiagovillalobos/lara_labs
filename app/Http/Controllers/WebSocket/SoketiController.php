<?php

namespace App\Http\Controllers\WebSocket;

use App\Events\NewEvent;
use App\Events\WebSocket\SoketiSimpleMessageEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SoketiController extends Controller
{
    public function index(Request $request)
    {
        $message = $request->get('message', 'Hello, Soketi!');

        SoketiSimpleMessageEvent::dispatch('Soketi');
        NewEvent::dispatch($message);
        return 'Message sent!';
        //return response()->json('Message sent!', 200);
    }
}
