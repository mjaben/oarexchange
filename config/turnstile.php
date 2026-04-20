<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Cloudflare Turnstile Configuration
    |--------------------------------------------------------------------------
    |
    | These are your Cloudflare Turnstile API credentials.
    | Get them from: https://dash.cloudflare.com/
    |
    */

    'site_key' => env('TURNSTILE_SITE_KEY', ''),
    'secret_key' => env('TURNSTILE_SECRET_KEY', ''),
    
    /*
    |--------------------------------------------------------------------------
    | Turnstile API Endpoint
    |--------------------------------------------------------------------------
    |
    | The Cloudflare API endpoint for verifying Turnstile tokens
    |
    */
    
    'verify_url' => 'https://challenges.cloudflare.com/turnstile/v0/siteverify',
];
