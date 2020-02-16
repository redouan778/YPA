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

    public function index($brand, $date)
    {
        $request = $this->client->get(env('RDW_API_URL') . '?merk=' .  strtoupper($brand));
        $response = $request->getBody()->getContents();
        $output = json_decode($response, true);

        $request1 = $this->client->get(env('RDW_API_URL') . '?datum_tenaamstelling=' . $date);
        $response1 = $request1->getBody()->getContents();
        $output1 = json_decode($response1, true);

        $allCars = $this->client->get(env('RDW_API_URL'));
        $response2 = $allCars->getBody()->getContents();
        $data = json_decode($response2,true);
        $array = [];


        for ($i = 0; $i < 10; $i++) {
            $array[] = $data[$i];
        }

        return view('index', [
            'output' => $output,
            'output1' => array($output1),
            'data' =>  $array,
            'brand' => $brand,
            'datum' => $date
        ]);
    }
     public function getCarsByBrand(string $brand)
     {
         $request = $this->client->get(env('RDW_API_URL') . '?merk=' .  strtoupper($brand));
         $response = $request->getBody()->getContents();
         $output = json_decode($response, true);

         return view('carsByBrand', [
             'autos' => $output,
             'brand' => $brand
         ]);
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

        // dd($data);

        for ($i = 0; $i < 10; $i++) {
            $array[] = $data[$i];
        }

        return view('tenCars', ['data' =>  $array]);
    }


    public function show($id){

      $allCars = $this->client->get(env('RDW_API_URL'));
      $response = $allCars->getBody()->getContents();
      $data = json_decode($response,true);

      $details = $data[$id];
      // dd($details);

      return view('overview', ['details' => $details]);
    }

}
