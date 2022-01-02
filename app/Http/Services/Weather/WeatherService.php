<?php


namespace App\Http\Services\Weather;
use GuzzleHttp\Client;

class WeatherService
{
    public function listWeather()
    {
        $weather = new Client();
        $res = $weather->get('http://api.openweathermap.org/data/2.5/weather?q=Hanoi&appid=1c709927dbee3c19b9ab37cd2a1a06a4');
        $data = $res->getBody();
        $dataJson = $data->getContents();
        $dataWeather = json_decode($dataJson);
//        dd($dataWeather);
        return $dataWeather;
    }
}
