<?php

    namespace App\Service;

    use Symfony\Component\HttpClient\HttpClient;

    /**
     * Class LifeSocketApi
     * @package Service
     */
    class LifeSocketApiService
    {

        /**
         * @link https://www.life-socket.jp/support/login
         */
        const API_BASE_URL = 'https://www.life-socket.jp/api';

        /**
         * @var string
         */
        private $apiKey;

        /**
         * @var HttpClient
         */
        private $httpClient;

        /**
         * @param string $apiKey
         * @param HttpClient $httpClient
         */

        public function __construct(string $apiKey = '', HttpClient $httpClient = null)
        {
            $this->apiKey     = $apiKey;
            $this->httpclient = $httpClient ?:HttpClient::create(
                [
                    'base_uri' => self::API_BASE_URL
                ]
            );
        }
    }
