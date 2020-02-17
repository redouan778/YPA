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

  public function __construct(Request $request){
        $this->client = new Client(['http_errors' => false]);
  }

  public function index($brand, $date){
    $request_brand = $this->client->get(env('RDW_API_URL') . '?merk=' .  strtoupper($brand));
    $response_brand = $request_brand->getBody()->getContents();
    $output_brand = json_decode($response_brand, true);

    $request_date = $this->client->get(env('RDW_API_URL') . '?datum_tenaamstelling=' . $date);
    $response_date = $request_date->getBody()->getContents();
    $output_date = json_decode($response_date, true);

    $all_cars = $this->client->get(env('RDW_API_URL'));
    $response_cars = $all_cars->getBody()->getContents();
    $data = json_decode($response_cars,true);
    $array_ten_cars = [];

    for ($i = 0; $i < 10; $i++) {
        $array_ten_cars[] = $data[$i];
    }

    return view('index', [
        'output_brand' => $output_brand,
        'output_date' => array($output_date),
        'array_ten_cars' =>  $array_ten_cars,
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

     for ($i = 0; $i < 10; $i++) {
       $array[] = $data[$i];
     }

     return view('tenCars', ['data' =>  $array]);
  }

  public function show($id)
  {
    $allCars = $this->client->get(env('RDW_API_URL'));
    $response = $allCars->getBody()->getContents();
    $data = json_decode($response,true);

    $details = $data[$id];

    return view('overview', ['details' => $details]);
  }
}
