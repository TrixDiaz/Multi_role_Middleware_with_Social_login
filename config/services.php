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

    //* Need to Fill the Client ID and Client Secret
    'facebook' => [
        'client_id' => '600175468592387',
        'client_secret' => '7675caf06415c1504b85965bbbc58e2b',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],
    //* Need to Fill the Client phpID and Client Secret
    'google' => [
        'client_id' => '702487726634-r7efk73asntqsif6856s9p7sk4gepvgo.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

];
