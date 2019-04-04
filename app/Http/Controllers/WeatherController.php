<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{ 


    /*
    |--------------------------------------------------------------------------
    | [VISTA]Mostrar en la página la lista de noticias
    |--------------------------------------------------------------------------
    | Listado de todas las noticias pero en la vista listaNoticias
    |
    */
    public function index(){
        $retorno1=\App\empleado::all();

        $retorno=json_decode($this->getClima(), true);
        
        return view('home',compact('retorno'));
    }



    public function getClima(){
            
        $retorno=array();
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://weather-ydn-yql.media.yahoo.com/forecastrss?location=guatemala,guatemala&format=json&oauth_consumer_key=dj0yJmk9RkJJRHpjM3NpV2dvJnM9Y29uc3VtZXJzZWNyZXQmc3Y9MCZ4PWNh&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1554335150&oauth_nonce=MTwZnBSUGOl&oauth_version=1.0&oauth_signature=t1duU8fr1cRIiO4f8cEHY/yMgxg=",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "",
        CURLOPT_HTTPHEADER => array(
            "Postman-Token: c35b02b9-de84-4232-bf11-66974de0f29a",
            "cache-control: no-cache"
        ),
        ));

        $retorno = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return array();
            echo "cURL Error #:" . $err;
        } else {
            return $retorno;
        }
    }

}
