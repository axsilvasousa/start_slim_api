<?php

$app->group('/v1',function(){
    $this->get("/brands",App\Controllers\BrandsController::class.":index");

});


$app->get("/brands",App\Controllers\BrandsController::class.":index");