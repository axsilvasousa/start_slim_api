<?php 

require __DIR__.'/../vendor/autoload.php';

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
        'db'=>[
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'slim',
            'username'  => 'root',
            'password'  => 'root',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => ''
        ]
    ],
];

$container = new \Slim\Container($configuration);
$app = new \Slim\App($container);

$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection( $configuration['settings']['db'] );
$capsule->bootEloquent();

require __DIR__.'/../routes/api.php';


