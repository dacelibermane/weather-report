<?php

namespace App;

//use GuzzleHttp\Client;

class DataRequest
{
    private string $city;
    private string $apiKey = "0435b779b04ba3e8fce30109338d0e85";
    private array $responseCity = [];
    private array $responseWeather = [];

    public function __construct(string $city)
    {
        $this->city = $city;
    }

    public function getCity(): City
    {
        $request = file_get_contents("http://api.openweathermap.org/geo/1.0/direct?q={$this->city}&appid={$this->apiKey}");
        $request = json_decode($request);


        foreach ($request as $info) {
            $this->responseCity[] = $info;
        }
        return new City(
            $this->responseCity[0]->{"name"},
            $this->responseCity[0]->{"lat"},
            $this->responseCity[0]->{"lon"},
            $this->responseCity[0]->{"country"}
        );
    }

    public function getWeather(City $city): Weather
    {
        $request = file_get_contents("https://api.openweathermap.org/data/2.5/weather?lat={$city->getLat()}&lon={$city->getLon()}&appid={$this->apiKey}");
        $request = json_decode($request);
//        var_dump($request);

        foreach ($request as $info) {
            $this->responseWeather[] = $info;
        }

        return new Weather(
            $this->responseWeather[1][0]->{"description"},
            $this->responseWeather[3]->{"temp"},
            $this->responseWeather[3]->{"humidity"},
            $this->responseWeather[5]->{"speed"}
        );

    }

}
