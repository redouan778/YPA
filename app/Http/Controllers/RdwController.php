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

  public function index()
  {

    return view('index');
  }


    public function allTables($date, $brand){
    $request = $this->client->get(env('RDW_API_URL'));
    $response = $request->getBody()->getContents();
    $output = json_decode($response, true);

    $array_ten_brands = [];
    $array_ten_dates = [];
    $array_ten_cars = [];

    $i = 0;

    foreach ($output as $record) {
       if($i >= 10) {
           break;
       }
        if(strtoupper($record['merk']) === strtoupper($brand)) {
            $array_ten_brands[] = $record;
            $i++;
        }

        if(strtolower($record['datum_tenaamstelling']) === strtolower($date)) {
            $array_ten_dates[] = $record;
            $i++;
        }
    }

        for ($i = 0; $i < 10; $i++) {
            $array_ten_cars[] = $output[$i];
        }

    return view('car.threeTables', [
        'output_brand' => $array_ten_brands,
        'output_date' => $array_ten_dates,
        'output_ten_cars' => $array_ten_cars,
        'brand' => $brand ,
        'date' => $date
    ]);
  }

   public function getCarsByBrand(string $brand)
   {
       $request = $this->client->get(env('RDW_API_URL') . '?merk=' .  strtoupper($brand));
       $response = $request->getBody()->getContents();
       $output = json_decode($response, true);

       return view('car.carsByBrand', [
           'autos' => $output,
           'brand' => $brand
       ]);
   }

   public function getCarsByDate($date)
   {
     $request = $this->client->get(env('RDW_API_URL') . '?datum_tenaamstelling=' . $date);
     $response = $request->getBody()->getContents();
     $output = json_decode($response, true);

     return view('car.carsByDate', [
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

     return view('car.tenCars', ['data' =>  $array]);
  }

  public function show($id)
  {
    $allCars = $this->client->get(env('RDW_API_URL'));
    $response = $allCars->getBody()->getContents();
    $data = json_decode($response,true);

    $details = $data[$id];

    return view('car.overview', ['details' => $details]);
  }
}
