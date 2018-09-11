<?php 

require __DIR__.'/../vendor/autoload.php';

require __DIR__.'/config.php';

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
        'db'=>$database['orm']
    ],
];

$container = new \Slim\Container($configuration);
$app = new \Slim\App($container);

$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection( $configuration['settings']['db'] );
$capsule->bootEloquent();

require __DIR__.'/routes.php';


