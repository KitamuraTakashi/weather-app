<?php

    namespace App\Controller;

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
            $response = new LifeSocketApiService('63b05a9d-82ef-4084-8c91-68fae321dafa');

            return $this->render('home/index.html.twig', [
                'controller_name' => 'HomeController',
            ]);
        }
    }
