<?php

    namespace App\Controller;

    use App\Entity\Weather;
    use App\Service\LifeSocketApiService;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpClient\HttpClient;
    use Symfony\Component\Routing\Annotation\Route;

    class HomeController extends AbstractController
    {
        /**
         * @Route("/", name="home")
         */
        public function index()
        {
            $httpClient = new LifeSocketApiService('63b05a9d-82ef-4084-8c91-68fae321dafa');
//            $response   = $httpClient->getWeatherReportFromPinpoint('1133612');


                $weather = new Weather();
                $weather->setPinpointCode('1133612');
                $weather->setDataTime('2019');
                $weather->setWeatherCode('1919');
                $weather->setWeatherName('晴れ');
                $weather->setTemperatureMin('10');
                $weather->setTemperatureMax('20');
                $weather->setRainPercentage('40');

                $em = $this->getDoctrine()->getManager();

                $em->persist($weather);
                $em->flush();



            return $this->render('home/index.html.twig', [
                'controller_name' => 'HomeController',
            ]);
        }
    }

