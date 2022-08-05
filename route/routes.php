<?php

function load(string $controller, string $action){

    $cont = "app\\controllers\\{$controller}";
    
    if(!class_exists($cont)){
        throw new Exception("O controller não existe!");
    }

    $controllerInstance = new $cont;

    if(!method_exists($controllerInstance, $action)){
        throw new Exception("O método {$action} não existe no controller {$controller}");
    }

    $controllerInstance->$action();

}

$routes = [
    'GET' => [
       '/' => load('HomeController', 'index'),
       '/contact' =>  load('ContactController', 'index')
    ],
    'POST'=> [
        '/contact' => load('ContactController', 'store')
    ]
];