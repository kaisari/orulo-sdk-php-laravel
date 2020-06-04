<?php

return [
    'client_id' => env('ORULO_CLIENT_ID', null),
    'client_secret' => env('ORULO_CLIENT_SECRET', null),
    'redirect_uri' => null,

    'guzzle' => [
        'base_uri' => 'https://www.orulo.com.br/api/v2/',

        // Number of seconds to wait while trying to connect to a server. 0 waits indefinitely.
        'connect_timeout' => 2.0,

        // Time needed to throw a timeout exception after a request is made.
        'timeout' => 0.0,

        // Set this to true if you want to debug the request/response.
        'debug' => false,
    ],

    // Defines if the logging should be enabled or not. If set to true, every the log entry will be sent to Laravel's
    // default logging output.
    'logging' => true,

    // sets the Redis connection used by this package to cache the access tokens
    'redis_connection' => null,
];
