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
            $completedTasks = Task::where('completed', true)->get();
            $pendingTasks = Task::where('completed', false)->get();
                        
            return view('index', [
                'completedTasks' => $completedTasks, 
                'pendingTasks' => $pendingTasks, 
            ]);
        } else require header('Location: /');
    }
}