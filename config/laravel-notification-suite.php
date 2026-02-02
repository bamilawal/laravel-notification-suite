<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Package Enabled
    |--------------------------------------------------------------------------
    |
    | Globally enable or disable all notifications from this suite.
    |
    */
    'enabled' => env('LNS_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | Application Branding
    |--------------------------------------------------------------------------
    |
    | Used across all email & notification templates.
    |
    */
    'branding' => [
        'app_name' => env('LNS_APP_NAME', config('app.name')),
        'logo'     => env('LNS_LOGO_URL', null), // URL or storage path
        'primary_color' => env('LNS_PRIMARY_COLOR', '#4F46E5'),
        'secondary_color' => env('LNS_SECONDARY_COLOR', '#111827'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Email Defaults
    |--------------------------------------------------------------------------
    |
    */
    'mail' => [
        'from_address' => env('LNS_FROM_ADDRESS', config('mail.from.address')),
        'from_name'    => env('LNS_FROM_NAME', config('mail.from.name')),
        'reply_to'     => env('LNS_REPLY_TO', null),
    ],

    /*
    |--------------------------------------------------------------------------
    | Template Behaviour
    |--------------------------------------------------------------------------
    |
    | Controls how templates are rendered.
    |
    */
    'templates' => [
        'use_markdown' => false,
        'footer_text'  => '© ' . date('Y') . ' ' . config('app.name') . '. All rights reserved.',
        'show_unsubscribe' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Notifications Channels
    |--------------------------------------------------------------------------
    |
    */
    'channels' => [
        'mail'     => true,
        'database' => false,
        'sms'      => false, // future-proof
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin & System Notifications
    |--------------------------------------------------------------------------
    |
    */
    'admin' => [
        'emails' => [
            env('LNS_ADMIN_EMAIL'),
        ],
        'notify_on' => [
            'new_user'      => true,
            'failed_login'  => true,
            'payment_event' => false,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | License & Activation
    |--------------------------------------------------------------------------
    |
    | Used to validate paid usage of the package.
    |
    */
    'license' => [
        'key' => env('LNS_LICENSE_KEY'),
        'activation_limit' => env('LNS_ACTIVATION_LIMIT', 10),
        'validation_cache_minutes' => 60,
        'server' => env('LNS_LICENSE_SERVER', null),
    ],

    /*
    |--------------------------------------------------------------------------
    | Debug & Logging
    |--------------------------------------------------------------------------
    |
    */
    'debug' => [
        'log_events' => env('LNS_LOG_EVENTS', false),
        'log_channel' => env('LNS_LOG_CHANNEL', 'stack'),
    ],

];
