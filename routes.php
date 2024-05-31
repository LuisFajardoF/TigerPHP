<?php

return [
    'index' => ['HomeController', 'show'],
    'about' => ['PagesController','about'],
    'services' => ['PagesController','services'],
    'contact' => ['PagesController','contact'],
    'tasks/create' => ['TasksController' ,'create'],
    'tasks/toggle' => ['TasksController' ,'toggle'],
    'tasks/delete' => ['TasksController' ,'delete'],
    '' => ['LoginController', 'show'],
    'login' => ['LoginController', 'login'],
    'logout' => ['LoginController', 'logout'],
];