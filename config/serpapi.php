<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default definitions
    |--------------------------------------------------------------------------
    |
    | Default http address, secret key
    |
    */

    'client' => [
        'base_url' => env('SERPAPI_BASE_URL'),
        'version' => env('SERPAPI_API_VERSION'),
        'api_key' => env('SERPAPI_API_KEY')
    ],

    /*
    |--------------------------------------------------------------------------
    | Location
    |--------------------------------------------------------------------------
    |
    | Parameter defines from where you want the search to originate.
    | If several locations match the location requested, we'll pick the most popular one.
    | Head to the /locations.json API if you need more precise control.
    | The location and uule parameters can't be used together.
    | It is recommended to specify location at the city level in order to simulate a real user’s search.
    | If location is omitted, the search may take on the location of the proxy.
    |
    */

    'location' => null,

    /*
    |--------------------------------------------------------------------------
    | Location
    |--------------------------------------------------------------------------
    |
    | Parameter is the Google encoded location you want to use for the search.
    | uule and location parameters can't be used together.
    |
    */

    'uule' => null
];
