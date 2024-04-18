<?php

namespace MatchersConsumer\Service;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class HttpClientService
{
    private Client $httpClient;

    private string $baseUri;

    public function __construct(string $baseUri)
    {
        $this->httpClient = new Client();
        $this->baseUri    = $baseUri;
    }

    public function sendRequest(): ResponseInterface
    {
        return $this->httpClient->get("{$this->baseUri}/matchers", [
            'headers' => ['Accept' => 'application/json', 'Theme' => 'light'],
            'query' => 'pages=2&pages=3&locales[]=fr-BE&locales[]=ru-RU&browsers[]=Firefox&browsers[]=Chrome&browsers[]=Safari',
            'http_errors' => false,
        ]);
    }
}
