<?php 

namespace App\Controllers;

use App\Models\Task;
use Core\Auth;

class HomeController
{
    public function show()
    {
        if (Auth::check())
        {
            $tasks = Task::all();
            
            $completedTasks = array_filter($tasks, function ($task) {
                return $task->completed;
            });
            
            $pendingTasks = array_filter($tasks, function ($task) {
                return !$task->completed;
            });
            
            return view('index', [
                'tasks' => $tasks, 
                'completedTasks' => $completedTasks, 
                'pendingTasks' => $pendingTasks, 
            ]);
        } else require header('Location: /');
    }
}