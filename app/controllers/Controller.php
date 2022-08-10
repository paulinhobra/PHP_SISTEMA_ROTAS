<?php

use League\Plates\Engine;

abstract class Controller{

    public static function view(string $view, array $dados){

        $templates = new Engine('/path/to/templates');

    }

}