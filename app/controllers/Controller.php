<?php

use League\Plates\Engine;

abstract class Controller{

    public static function view(string $view, array $dados){

        $viewsPath = dirname(__FILE__, 2) . '/views';
        $templates = new Engine($viewsPath);

        echo $templates->render($viewsPath, $dados);

    }

}