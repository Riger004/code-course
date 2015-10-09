<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
    'domain' => env('MAILGUN_DOMAIN'),
    'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
    'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
    'key'    => env('SES_KEY'),
    'secret' => env('SES_SECRET'),
    'region' => 'us-east-1',
    ],

    'stripe' => [
    'model'  => Codecourse\User::class,
    'key'    => env('STRIPE_KEY'),
    'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
    'client_id' => '519130928251384',
    'client_secret' => '5d6ef757c7f7cbb1a2917c8eb76a21c5',
    'redirect' => 'http://codecourse.app:8000/auth/facebook/callback',
    ],


    'google' => [
    'client_id' => '902046316712-p6tocjer2g1iaeklb7qk7f7a5gvo59rj.apps.googleusercontent.com',
    'client_secret' => 'vYkwse-uPESEIK98fDaG3LNL',
    'redirect' => 'http://codecourse.app:8000/auth/google/callback',
    ],

    ];
