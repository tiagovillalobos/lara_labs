<?php

namespace App\Http\Controllers\SMS;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class TwilioController extends Controller
{
    public function send()
    {
        $receiveNumber = '+5512981904120';
        $message = 'Mensagem teste Twilio';

        $sid = env('TWILIO_SID');
        $token = env('TWILIO_TOKEN');
        $from = env('TWILIO_FROM');

        try {
            
            $client = new Client(username: $sid, password: $token);

            $client->messages->create(
                to: $receiveNumber, 
                options: [
                    'from' => $from,
                    'body' => $message
                ]
            );

            return response()->json(
                data: [
                    'message' => 'Mensagem enviada com sucesso!'
                ], 
                status: 200
            );

        } catch(Exception $e) {
            
            return response()->json(
                data: [
                    'message' => 'Erro ao enviar mensagem!',
                    'error' => $e->getMessage()
                ], 
                status: 500
            );

        }
    }
}
