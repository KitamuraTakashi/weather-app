<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WeatherRepository")
 * @ApiResource
 */
class Weather
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $data_time;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $weather_code;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $weather_name;

    /**
     * @ORM\Column(type="integer")
     */
    private $temperature_min;

    /**
     * @ORM\Column(type="integer")
     */
    private $temperature_max;

    /**
     * @ORM\Column(type="integer")
     */
    private $rain_percentage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pinpoint_code;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDataTime(): ?string
    {
        return $this->data_time;
    }

    public function setDataTime(string $data_time): self
    {
        $this->data_time = $data_time;

        return $this;
    }

    public function getWeatherCode(): ?string
    {
        return $this->weather_code;
    }

    public function setWeatherCode(string $weather_code): self
    {
        $this->weather_code = $weather_code;

        return $this;
    }

    public function getWeatherName(): ?string
    {
        return $this->weather_name;
    }

    public function setWeatherName(string $weather_name): self
    {
        $this->weather_name = $weather_name;

        return $this;
    }

    public function getTemperatureMin(): ?int
    {
        return $this->temperature_min;
    }

    public function setTemperatureMin(int $temperature_min): self
    {
        $this->temperature_min = $temperature_min;

        return $this;
    }

    public function getTemperatureMax(): ?int
    {
        return $this->temperature_max;
    }

    public function setTemperatureMax(int $temperature_max): self
    {
        $this->temperature_max = $temperature_max;

        return $this;
    }

    public function getRainPercentage(): ?int
    {
        return $this->rain_percentage;
    }

    public function setRainPercentage(int $rain_percentage): self
    {
        $this->rain_percentage = $rain_percentage;

        return $this;
    }

    public function getPinpointCode(): ?string
    {
        return $this->pinpoint_code;
    }

    public function setPinpointCode(string $pinpoint_code): self
    {
        $this->pinpoint_code = $pinpoint_code;

        return $this;
    }
}
