<?php

return [
    'cookie' => [
        'name' => env('CART_COOKIE_NAME', 'cart_cookie'),
        'expiration' => 7 * 24 * 60, //one week
    ],
];
