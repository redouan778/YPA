<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Rdw;

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

//         dd(json_decode($response,true));

         return $response;
     }


    public function getCarsByDate($date)
    {
        $request = $this->client->get(env('RDW_API_URL') . '?datum_tenaamstelling=' . $date);
        $response = $request->getBody()->getContents();
        $output = json_decode($response, true);


        return view('carsByDate', [
            'autos' => $output,
            'datum' => $date
        ]);
    }


      public function getTenCars()
    {
        $allCars = $this->client->get(env('RDW_API_URL'));
        $response = $allCars->getBody()->getContents();
        $data = json_decode($response,true);
        $array = [];

        for ($i = 0; $i < 10; $i++) {
            $array[] = $data[$i];
        }

        return view('tenCars', ['data' =>  $array]);
    }

}