<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class WeatherController extends AbstractController{
    #[Route('/weather/{countryCode}/{cityName}')]
    public function forecast(string $countryCode, string $cityName) : Response{
        $forecasts = [
          [
              "date" => new \DateTime('2024-01-01'),
              "temperatureCelcius" => 17,
              "flTemperatureCelcius" => 16,
              "pressure" => 1000,
              "humidity" => 64,
              "wind_speed" => 3.2,
              "wind_deg" => 270,
              "cloudiness" => 75,
              "icon" => 'sun',
          ],
            [
                "date" => new \DateTime('2024-01-01'),
                "temperatureCelcius" => 17,
                "flTemperatureCelcius" => 16,
                "pressure" => 1000,
                "humidity" => 59,
                "wind_speed" => 2.9,
                "wind_deg" => 270,
                "cloudiness" => 73,
                "icon" => 'sun',
            ],
            [
                "date" => new \DateTime('2024-01-01'),
                "temperatureCelcius" => 17,
                "flTemperatureCelcius" => 16,
                "pressure" => 900,
                "humidity" => 64,
                "wind_speed" => 3.2,
                "wind_deg" => 270,
                "cloudiness" => 75,
                "icon" => 'snow',
            ],
        ];

        $response = $this->render('/weather/forecast.html.twig', [
            'forecasts' => $forecasts,
            'cityName' => $cityName,
            'countryCode' => $countryCode,
        ]);

        return $response;
    }
}