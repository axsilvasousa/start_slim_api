<?php

$app->group('/v1',function(){
    $this->get("/brands",App\Controllers\BrandsController::class.":index");

});


$app->get("/",function(){
    echo "Index";
    
});

$app->get("/brands",App\Controllers\BrandsController::class.":index");

$app->get("/usuarios",App\Controllers\UsuariosController::class.":index");