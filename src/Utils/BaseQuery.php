<?php

declare(strict_types=1);

namespace Slvler\Serpapi\Utils;

class BaseQuery
{
    /** @var array */
    protected array $properties = [];
    protected array $response = [];

    public function __construct(array $properties = [])
    {
        $this->properties = $properties;
    }
    public function setProperty(): self
    {
        $arr = [
            'q',
            'location'
        ];

        foreach ($arr as $item){
            if(array_key_exists($item, $this->properties)){
                $this->response[$item] = $this->properties[$item];
            }else{
                $this->response[$item] = config('serpapi.'.$item);
            }
        }
        $this->response['api_key'] = config('serpapi.client.api_key');
        return $this;
    }

    public function toResponse(): string
    {
        return http_build_query($this->response);
    }
}
