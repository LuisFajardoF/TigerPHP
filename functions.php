<?php

function dd($value) 
{
    return die(var_dump($value));
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
