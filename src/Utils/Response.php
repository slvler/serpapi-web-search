<?php

namespace Slvler\Serpapi\Utils;

class Response
{
    protected $response;

    public function __construct($response)
    {
        $this->response = $response;
    }

    public function getBody(): string
    {
        return (string)$this->response->getBody();
    }

    public function toObject()
    {
        return json_decode((string)$this->response->getBody(), true);
    }
}
