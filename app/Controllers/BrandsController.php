<?php 

namespace App\Controllers;

use App\Models\Brands;

class BrandsController{
    
    function index($request,$response){
        $results = Brands::all();
        return $response->withJson($results, 201);
    }
}