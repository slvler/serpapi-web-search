<?php

declare(strict_types=1);

namespace Slvler\Serpapi\Services;

use Illuminate\Container\Container;
use InvalidArgumentException;
use Slvler\Serpapi\Exceptions\MissingApiKey;
use Slvler\Serpapi\Utils\BaseQuery;
use Slvler\Serpapi\Utils\SerpapiApiWrapper;
use Slvler\Serpapi\Utils\Response;

class Serpapi extends SerpapiApiWrapper
{
    public $response;

    public function __construct(Container $app)
    {
        $apiKey = $app['config']->get('serpapi.client.api_key');

        if (empty($apiKey) || !isset($apiKey)) {
            throw MissingApiKey::create();
        }

        $baseURL = $app['config']->get('serpapi.client.base_url');

        if (empty($baseURL) || !isset($baseURL)) {
            throw new InvalidArgumentException('Invalid Serpapi API base URL.');
        }
        parent::__construct($baseURL);
    }

    public function search($params)
    {
        $replace = (new BaseQuery($params))->setProperty()->toResponse();

        $this->response = $this->getHttpClient()->request('GET','/search', [
            'query' => $replace
        ]);
        return $this;
    }
    public function result()
    {
        $data = new Response($this->response);
        return $data->toObject();
    }
}
