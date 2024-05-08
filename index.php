<?php
require 'functions.php';

$tasks = [
    [
        'title' => 'Estudiar PHP',
        'completed' => true,
    ],
    [
        'title' => 'Ir al supermercado',
        'completed' => false,
    ],
    [
        'title' => 'Proyectarse',
        'completed' => false,
    ]
];

$completedTasks = array_filter($tasks, function ($task) {
    return $task['completed'];
});

$pendingTasks = array_filter($tasks, function ($task) {
    return !$task['completed'];
});

require 'index.view.php';