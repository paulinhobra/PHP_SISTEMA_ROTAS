<?php

function load(string $controller, string $action){

    try{
        $cont = "app\\controllers\\{$controller}";
    
        if(!class_exists($cont)){
            throw new Exception("O controller não existe!");
        }

        $controllerInstance = new $cont;

        if(!method_exists($controllerInstance, $action)){
            throw new Exception("O método {$action} não existe no controller {$controller}");
        }

        $controllerInstance->$action((object) $_REQUEST);

    }catch(Exception $e){
        echo $e->getMessage();
    }
    

}

$routes = [
    'GET' => [
       '/' => fn() => load('HomeController', 'index'),
       '/contact' => fn() => load('ContactController', 'index')
    ],
    'POST'=> [
        '/contact' => fn() => load('ContactController', 'store')
    ]
];