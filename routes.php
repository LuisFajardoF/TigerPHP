<?php

use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\PagesController;
use App\Controllers\TasksController;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::get('index', [HomeController::class, 'show']);
SimpleRouter::get('/', [LoginController::class, 'show']);
SimpleRouter::post('login', [LoginController::class, 'login']);
SimpleRouter::post('logout', [LoginController::class, 'logout']);
SimpleRouter::get('about', [PagesController::class, 'about']);
SimpleRouter::get('services', [PagesController::class, 'services']);
SimpleRouter::get('contact', [PagesController::class, 'contact']);
SimpleRouter::post('tasks/create', [TasksController::class, 'create']);
SimpleRouter::post('tasks/toggle/{id}', [TasksController::class, 'toggle']);
SimpleRouter::post('tasks/delete/{id}', [TasksController::class, 'delete']);

SimpleRouter::start();

// return [
//     'index' => ['HomeController', 'show'],
//     'about' => ['PagesController','about'],
//     'services' => ['PagesController','services'],
//     'contact' => ['PagesController','contact'],
//     'tasks/create' => ['TasksController' ,'create'],
//     'tasks/toggle' => ['TasksController' ,'toggle'],
//     'tasks/delete' => ['TasksController' ,'delete'],
//     '' => ['LoginController', 'show'],
//     'login' => ['LoginController', 'login'],
//     'logout' => ['LoginController', 'logout'],
// ];