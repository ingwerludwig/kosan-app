<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => '352202755152-fvf46c11rsog41kik2hcoc6g8bdkk9aq.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/dashboard',
    ],
    'facebook' => [
        'client_id' => '791026681904356',
        'client_secret' => 'ef765a99579def1482971453a6b1035e',
        'redirect' => 'https://127.0.0.1:8000/dashboard',
    ]

];
