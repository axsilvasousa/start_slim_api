<?php 

namespace App\Controllers;

use App\Models\Usuario;

class UsuariosController{
    
    function index($request,$response){
        $results = Usuario::all();
        return $response->withJson($results, 201);
    }
}