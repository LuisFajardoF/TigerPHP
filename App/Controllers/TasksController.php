<?php 


namespace App\Controllers;

use App\Models\Task;

class TasksController
{
    public function create()
    {
        Task::create([
            'title' => $_POST['title'],
            'color' => $_POST['color'],
            'completed' => 0,
        ]); 

        // header('Location: /index');
        return redirect('/index');
    }
    public function toggle()
    {
        $task = Task::find($_POST['id']);
        $task->update([
            'completed' => $_POST['completed'],
        ]); 

        // header('Location: /index');
        return redirect('/index');
    }    
    public function delete()
    {        
        $task = Task::find($_POST['id']);
        $task->delete();

        // header('Location: /index');
        return redirect('/index');   
    }    
}