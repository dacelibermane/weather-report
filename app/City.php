<?php declare(strict_types=1);

namespace App;

class City
{
    private string $name;
    private float $lat;
    private float $lon;
    private string $country;

    public function __construct(string $name, float $lat, float $lon, string $country)
    {
        $this->name = $name;
        $this->lat = $lat;
        $this->lon = $lon;
        $this->country = $country;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLat(): float
    {
        return $this->lat;
    }

    public function getLon(): float
    {
        return $this->lon;
    }

    public function getCountry(): string
    {
        return $this->country;
    }
}
