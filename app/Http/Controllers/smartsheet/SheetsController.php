<?php

namespace App\Http\Controllers\smartsheet;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Client\Request;

class SheetsController extends Controller
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

    public function sheetdetail($id)
    {
        $token = '4rqCkLoFab0ZwmGdcy0Tin35TevXmSLpfwioa';

        $client = new Client();
        $url = 'https://api.smartsheet.com/2.0/sheets/'.$id;

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


    public function create()
    {
        $token = '4rqCkLoFab0ZwmGdcy0Tin35TevXmSLpfwioa';

        $client = new Client();
        $url = 'https://api.smartsheet.com/2.0/sheets?include=data,attachments,discussions';

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $token
        ];

        $body = [
            "name" => "newsheet", 
            "fromId" => 12
        ];
        
        $response = $client->request('GET', $url, [
            'headers' => $headers,
            'form_data' => $body,
        ]);
        $responseBody = json_decode($response->getBody());
        return $responseBody;
    }

    
}
