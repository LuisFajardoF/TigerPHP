<?php

use Core\Auth;
use App\Controllers\{
    HomeController, 
    LoginController, 
    UsersController
};

use Pecee\SimpleRouter\SimpleRouter;

if (Auth::check()) {
    SimpleRouter::get('index', [HomeController::class, 'show']);
    SimpleRouter::get('create-user', [HomeController::class, 'create_user']);
    SimpleRouter::get('show-user', [UsersController::class, 'show']);
    SimpleRouter::post('logout', [LoginController::class, 'logout']);
    SimpleRouter::post('users/create', [UsersController::class, 'create']);
    //las nuevas rutas deberan ir justo abajo de esta linea 

} else {
    SimpleRouter::get('/', [LoginController::class, 'show']);
    SimpleRouter::post('login', [LoginController::class, 'login']);
}

SimpleRouter::start();
