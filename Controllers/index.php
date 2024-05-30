<?php

if (Auth::check())
{
    $tasks = Task::all();
    
    $completedTasks = array_filter($tasks, function ($task) {
        return $task->completed;
    });
    
    $pendingTasks = array_filter($tasks, function ($task) {
        return !$task->completed;
    });
    
    require 'Views/index.view.php';
} else require header('Location: /');