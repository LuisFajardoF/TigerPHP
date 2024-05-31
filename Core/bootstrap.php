<?php 

require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Core/Router.php';
require 'Core/Request.php';
require 'Core/App.php';
require 'Core/Auth.php';
require 'Models/Task.php';
require 'Models/User.php';
require 'Controllers/HomeController.php';
require 'Controllers/PagesController.php';
require 'Controllers/LoginController.php';
require 'Controllers/TasksController.php';
require 'functions.php';

App::set('config', require('config.php'));
App::set('database', new QueryBuilder(
    Connection::start(App::get('config')['database'])
));

if (App::get('config')['error_handling']) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

