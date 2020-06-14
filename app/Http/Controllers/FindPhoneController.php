<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use Validator;

class FindPhoneController extends Controller
{
    public function find(Request $request) 
    {
        $validate = Validator::make($request->all(), ['phone_number' => 'required|string']);
        if($validate->fails()) {
            return response()->json($validate->messages(), 400);
        }

        $endpoint = env('API_URL') . 'get-number/';
        $params = ['phone_number' => $request->phone_number];
        
        try {
            $guzzle = new Client(['headers' => [
                                    'Authorization' => 'Token 6b9b5334cad614a982a66aa454f0f46ee6b2b0a8',
                                    'Content-Type'  => 'application/json'
                                ]]);
                                
            $response = $guzzle->request('POST', $endpoint, ['body' => json_encode($params)]);
            return response()->json(json_decode($response->getBody()));
        } catch (RequestException $e) {
            // dd($e->getResponse());
            if ($e->getResponse()->getStatusCode() == '404') {
                return ['status' => 400, 'data' => json_decode($e->getResponse()->getBody())];
            } else {
                echo Psr7\str($e->getResponse());
            }
        }
        dd(json_decode($response->getBody()));
    }
}
