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
        $array = [];
        echo "<pre>";
//        var_dump($output);
        $date = "20200102";

        foreach ($output as $car) {
            echo "<pre>";
            $dateTenaamstelling = $car["datum_tenaamstelling"];


            if ($dateTenaamstelling == $date) {
                var_dump($car['datum_tenaamstelling'] . "<br>");
            }
        }

        dd();

        return view('welcome', [
            'data' => $array
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

        return view('welcome', ['data' =>  $array]);
    }

}
