<?php

    namespace App\Service;

    use App\Entity\Weather;
    use Symfony\Component\HttpClient\HttpClient;

    /**
     * Class LifeSocketApi
     * @package App\Service
     */
    final class LifeSocketApiService
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
            $this->httpClient = $httpClient ?: HttpClient::create();
        }


        /**
         * @param string $pinpointCode
         * @param int $days
         * @param string $lang
         *
         * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
         * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
         * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
         * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
         */
        public function getWeatherReportFromPinpoint(
            string $pinpointCode,
            int $days = 1,
            string $lang = 'ja'
        ): void {
            $query = array_merge([
                'days' => $days,
                'lang' => $lang
            ]);


            $apiUrl = $this->getApiUrl('/v1/weather/') . $pinpointCode;

            $response = $this->getApiData($apiUrl, $query);
            dump($response);


//            return new Weather();
        }

        /**
         * 取得したいAPIのURlを生成する
         *
         * @param string $apiUrl
         *
         * @return string
         */
        public function getApiUrl(string $apiUrl): string
        {
            return self::API_BASE_URL . $apiUrl;
        }


        /**
         * @param string $apiUrl
         * @param array $query
         *
         * @return mixed
         * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
         * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
         * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
         * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
         */
        public function getApiData(string $apiUrl, array $query)
        {
            $response = $this->httpClient->request('GET', $apiUrl,
                [
                    'headers' => ['x-access-key' => $this->apiKey],
                    'query'   => $query
                ]
            )->getContent();

            return json_decode($response, false);
        }


    }
