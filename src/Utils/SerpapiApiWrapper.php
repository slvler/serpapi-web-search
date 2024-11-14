<?php

declare(strict_types=1);

namespace Slvler\Serpapi\Utils;

use GuzzleHttp\Client;
class SerpapiApiWrapper
{
    private Client $httpClient;
    public function __construct($baseUrl)
    {
        $this->httpClient = new Client([
                'base_uri' => $baseUrl
        ]);
    }
    public function getHttpClient(): Client
    {
        return $this->httpClient;
    }
}
