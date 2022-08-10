<?php

require "../vendor/autoload.php";
//require "../route/routes.php";

try{

    $uri = parse_url($_SERVER["REQUEST_URI"])['path'];

    var_dump($uri);

}catch(Exception $e){
    echo $e->getMessage();
}