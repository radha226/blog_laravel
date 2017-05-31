<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id'     => '337568313326596',
        'client_secret' => '6e14b17bff4a163a624faf8c0ddb21ec',
        'redirect'      => 'http://blog.dev/auth/facebook/callback',
    ],
    'github' => [
        'client_id'     => '97e719123a032654ed59',
        'client_secret' => 'f29b325716fe047d486af72c2280a88a37e0956a',
        'redirect'      => 'http://blog.dev/auth/github/callback',
    ],

];
