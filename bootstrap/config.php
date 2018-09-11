<?php

$dotenv = new Dotenv\Dotenv(__DIR__.'/../');
$dotenv->load();


$database = [
    'orm' => [
        'driver'    => 'mysql',
        'host'      => getenv('DB_HOST'),
        'database'  => getenv('DB_DATABASE'),
        'username'  => getenv('DB_USERNAME'),
        'password'  => getenv('DB_PASSWORD'),
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => ''
    ],
    'phinx'=>[
        'adapter' => 'mysql',
        'host' => getenv('DB_HOST'),
        'port' => getenv('DB_PORT'),
        'name' => getenv('DB_DATABASE'),
        'user' => getenv('DB_USERNAME'),
        'pass' => getenv('DB_PASSWORD'),
        'charset' => 'utf8',
    ]
    
];