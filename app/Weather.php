<?php declare(strict_types=1);

namespace App;

class Weather
{
    private string $weatherCondition;
    private float $temperature;
    private int $humidity;
    private float $windSpeed;

    public function __construct(string $weatherCondition, float $temperature, int $humidity, float $windSpeed)
    {

        $this->weatherCondition = $weatherCondition;
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->windSpeed = $windSpeed;
    }


    public function convertTemperature(float $temperature): float
    {
        $celsius = $temperature - 273.15;
        return round($celsius, 1);
    }

    public function getTemperature(): float
    {
        return $this->temperature;
    }

    public function getHumidity(): int
    {
        return $this->humidity;
    }

    public function getWindSpeed(): float
    {
        return $this->windSpeed;
    }

    public function getWeatherCondition(): string
    {
        return $this->weatherCondition;
    }
}