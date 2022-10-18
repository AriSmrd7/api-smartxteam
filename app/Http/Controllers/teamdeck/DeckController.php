<?php

namespace App\Http\Controllers\teamdeck;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;

class DeckController extends Controller
{

    //method get
    public function getall()
    {
        $token = '4rqCkLoFab0ZwmGdcy0Tin35TevXmSLpfwioa';

        $client = new Client();
        $url = 'https://api.smartsheet.com/2.0/sheets/';

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $token
        ];
        $response = $client->request('GET', $url, [
            'headers' => $headers,
        ]);
        $responseBody = json_decode($response->getBody());
        return $responseBody;
    }
}