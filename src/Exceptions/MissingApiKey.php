<?php

declare(strict_types=1);

namespace Slvler\Serpapi\Exceptions;

use InvalidArgumentException;
/**
 * @internal
 */
class MissingApiKey extends InvalidArgumentException
{
    public static function create(): self
    {
        return new self(
            'The Serpapi API Key is missing. Please publish the [serpapi.php] configuration file and set the [api_key].'
        );
    }
}
