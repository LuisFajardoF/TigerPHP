<?php 

use Core\App;

App::set('config', require('config.php'));

if (App::get('config')['debug']) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

