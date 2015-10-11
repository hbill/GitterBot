<?php
use App\Gitter\Middleware\Storage;

return [
    'token'       => env('GITTER_TOKEN', null),

    'rooms'       => [
        'debug' => '5617cdcad33f749381a8d5e5', // Debug
        'chat'  => '52f9b90e5e986b0712ef6b9d', // Laravel Chat
        'site'  => '54053e51163965c9bc201c26', // Laravel Site
        'bot'   => '560281040fc9f982beb1908a', // Laravel Gitter Bot
        'yii'   => '555086c915522ed4b3e03631', // Yii Public
        'jphp'  => '550177ff15522ed4b3dd296e', // Jphp
    ],

    'middlewares' => [
        App\Gitter\Middleware\LoggerMiddleware::class       => Storage::PRIORITY_MAXIMAL,
        App\Gitter\Middleware\KarmaCounterMiddleware::class => Storage::PRIORITY_DEFAULT,
    ],
];