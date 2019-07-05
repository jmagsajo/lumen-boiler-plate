<?php

return [

    'default' => env('DB_CONNECTION'),
    'migrations' => 'migrations',
    'connections' => [
        'mysql' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST'),
            'port'      => env('DB_PORT'),
            'database'  => env('DB_DATABASE'),
            'username'  => env('DB_USERNAME'),
            'password'  => env('DB_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
         ],

        'gmovies_api' => [
            'driver'    => 'mysql',
            'host'      => env('GMOVIES_API_HOST'),
            'port'      => env('GMOVIES_API_DB_PORT'),
            'database'  => env('GMOVIES_API_DB_DATABASE'),
            'username'  => env('GMOVIES_API_DB_USERNAME'),
            'password'  => env('GMOVIES_API_DB_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
    ],

    'redis' => [

        'cluster' => false,
        'client' => 'predis',
        
        'default' => [
            'host'     => env('REDIS_HOST', '127.0.0.1'),
            'port'     => env('REDIS_PORT', 6379),
            'database' => env('REDIS_DATABASE', 0),
        ],

        'cache' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => env('REDIS_CACHE_DB', 1),
        ],

        'production' => [
            'scheme' => "tls",
            'host' => env('PROD_REDIS_HOST', '127.0.0.1'),
            'password' => env('PROD_REDIS_PASSWORD', null),
            'port' => env('PROD_REDIS_PORT', 6379),
            'database' => env('PROD_REDIS_DB', 2),
        ],
    
    ],
];