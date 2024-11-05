<?php

return [
    'ADMIN'             => env('MYADMIN.ADMIN', 'admin'),
    'CAPTCHA'           => env('MYADMIN.CAPTCHA', false),
    'IS_DEMO'           => env('MYADMIN.IS_DEMO', false),
    'CDN'               => env('MYADMIN.CDN', ''),
    'EXAMPLE'           => env('MYADMIN.EXAMPLE', true),
    'IS_CSRF'           => env('MYADMIN.IS_CSRF', false),
    'STATIC_PATH'       => env('MYADMIN.STATIC_PATH', '/static'),
    'OSS_STATIC_PREFIX' => env('MYADMIN.OSS_STATIC_PREFIX', 'static_myadmin'),
];
