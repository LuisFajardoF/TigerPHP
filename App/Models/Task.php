<?php

namespace App\Models;

class Task extends Model
{
    protected $table = 'tasks';

    public function complete()
    {
        return $this->completed = true;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
}
