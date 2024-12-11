<?php

namespace App\DataFixtures;

use App\Entity\Forecast;
use App\Entity\Location;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $barcelona = $this->addLocation(
            $manager,
            'Barcelona',
            'ES',
            '41.3874',
            2.168);

        $this->addBarcelonaForecasts($manager, $barcelona);

        $berlin = $this->addLocation(
            $manager,
            'Berlin',
            'DE',
            '53.3874',
            2.762);

        $this->addBerlinForecasts($manager, $berlin);

        $stettin = $this->addLocation(
            $manager,
            'Stettin',
            'PL',
            '41.3874',
            2.168);

        $manager->flush();

        $this->addStettinForecasts($manager, $stettin);
    }

    private function addLocation(ObjectManager $manager,
                                 $name,
                                 $countryCode,
                                 $latitude,
                                 $longitude) : Location{
        $location = new Location();
        $location->setName($name)
            ->setCountryCode($countryCode)
            ->setLatitude($latitude)
            ->setLongitude($longitude);

        $manager->persist($location);

        return $location;
    }

    private function addBarcelonaForecasts(ObjectManager $manager, Location $barcelona){

        $forecast = new Forecast();
        $forecast
            ->setDate(new \DateTime('2024-01-01'))
            ->setLocation($barcelona)
            ->setTemperatureCelsius(23)
            ->setFlTemperatureCelsius(25)
            ->setPressure(1009)
            ->setHumidity(49)
            ->setWindSpeed(7.7)
            ->setWindDeg(90)
            ->setCloudiness(0)
            ->setIcon('sun'
            );
        $manager->persist($forecast);


        $forecast = new Forecast();
        $forecast
            ->setDate(new \DateTime('2024-01-02'))
            ->setLocation($barcelona)
            ->setTemperatureCelsius(23)
            ->setFlTemperatureCelsius(25)
            ->setPressure(999)
            ->setHumidity(70)
            ->setWindSpeed(3.7)
            ->setWindDeg(45)
            ->setCloudiness(75)
            ->setIcon('cloud'
            );
        $manager->persist($forecast);


        $forecast = new Forecast();
        $forecast
            ->setDate(new \DateTime('2024-01-03'))
            ->setLocation($barcelona)
            ->setTemperatureCelsius(21)
            ->setFlTemperatureCelsius(22)
            ->setPressure(1025)
            ->setHumidity(40)
            ->setWindSpeed(0.7)
            ->setWindDeg(0)
            ->setCloudiness(25)
            ->setIcon('cloud-sun'
            );
        $manager->persist($forecast);
    }

    private function addBerlinForecasts(ObjectManager $manager, Location $berlin){

        $forecast = new Forecast();
        $forecast
            ->setDate(new \DateTime('2024-01-01'))
            ->setLocation($berlin)
            ->setTemperatureCelsius(23)
            ->setFlTemperatureCelsius(25)
            ->setPressure(1009)
            ->setHumidity(49)
            ->setWindSpeed(7.7)
            ->setWindDeg(90)
            ->setCloudiness(0)
            ->setIcon('sun'
            );
        $manager->persist($forecast);


        $forecast = new Forecast();
        $forecast
            ->setDate(new \DateTime('2024-01-02'))
            ->setLocation($berlin)
            ->setTemperatureCelsius(11)
            ->setFlTemperatureCelsius(9)
            ->setPressure(999)
            ->setHumidity(70)
            ->setWindSpeed(3.7)
            ->setWindDeg(45)
            ->setCloudiness(75)
            ->setIcon('cloud'
            );
        $manager->persist($forecast);


        $forecast = new Forecast();
        $forecast
            ->setDate(new \DateTime('2024-01-03'))
            ->setLocation($berlin)
            ->setTemperatureCelsius(21)
            ->setFlTemperatureCelsius(22)
            ->setPressure(1025)
            ->setHumidity(40)
            ->setWindSpeed(0.7)
            ->setWindDeg(0)
            ->setCloudiness(25)
            ->setIcon('cloud-sun'
            );
        $manager->persist($forecast);
    }

    private function addStettinForecasts(ObjectManager $manager, Location $stettin){

        $forecast = new Forecast();
        $forecast
            ->setDate(new \DateTime('2024-01-01'))
            ->setLocation($stettin)
            ->setTemperatureCelsius(23)
            ->setFlTemperatureCelsius(25)
            ->setPressure(1009)
            ->setHumidity(49)
            ->setWindSpeed(7.7)
            ->setWindDeg(90)
            ->setCloudiness(0)
            ->setIcon('sun'
            );

        $manager->persist($forecast);

        $forecast = new Forecast();
        $forecast
            ->setDate(new \DateTime('2024-01-02'))
            ->setLocation($stettin)
            ->setTemperatureCelsius(23)
            ->setFlTemperatureCelsius(25)
            ->setPressure(999)
            ->setHumidity(70)
            ->setWindSpeed(3.7)
            ->setWindDeg(45)
            ->setCloudiness(75)
            ->setIcon('cloud'
            );
        $manager->persist($forecast);


        $forecast = new Forecast();
        $forecast
            ->setDate(new \DateTime('2024-01-03'))
            ->setLocation($stettin)
            ->setTemperatureCelsius(21)
            ->setFlTemperatureCelsius(22)
            ->setPressure(1025)
            ->setHumidity(40)
            ->setWindSpeed(0.7)
            ->setWindDeg(0)
            ->setCloudiness(25)
            ->setIcon('cloud-sun'
            );
        $manager->persist($forecast);
    }
}
