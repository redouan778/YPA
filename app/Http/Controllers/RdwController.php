<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class RdwController extends Controller
{
    /**
     * @var GuzzleHttp\Client $client
     */
    private $client;

    public function __construct(Request $request)
    {
        $this->client = new Client(['http_errors' => false]);
    }
    
    public function getCars(string $brand)
    {
        $request = $this->client->get(env('RDW_API_URL') . '?merk=' .  strtoupper($brand));
        $response = $request->getBody()->getContents();
    
        dd(json_decode($response,true));
    }
    
    public function getCarsByDate($date)
    {
        $request = $this->client->get(env('RDW_API_URL') . '?datum_tenaamstelling=' .  $date);
        $response = $request->getBody()->getContents();
    
        dd(json_decode($response,true));
    }
}
