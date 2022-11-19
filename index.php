<?php declare(strict_types=1);

require_once "vendor/autoload.php";

use App\DataRequest;


echo "*************** Search Global Weather **********************\n";
$userCity = readline("Enter city name: ");
$data = new DataRequest($userCity);
$city = $data->getCity($data);
$weather = $data->getWeather($city);
echo $city->getName() . ", " . $city->getCountry() . " : " . $weather->convertTemperature($weather->getTemperature()) . "°C\n";
echo "Weather condition : " . $weather->getWeatherCondition() .  ".\n " ;
echo "Humidity - " . $weather->getHumidity() . "%.\n";
echo "Wind speed ". $weather->getWindSpeed(). "m/s.\n";
