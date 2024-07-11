<?php

use Symfony\Component\VarDumper\VarDumper;

if (!function_exists('dd')) {
    function dd(...$values) 
    {
        foreach ($values as $var) {
            VarDumper::dump($var);
        }
        die(0);
    }
}

function view($view, $params = [])
{
    extract($params);
    require "Views/{$view}.view.php";
}

function redirect($path) 
{
    header("Location: {$path}");    
}
