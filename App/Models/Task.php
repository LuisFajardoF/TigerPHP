<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'color',
        'completed',
    ];

    public $timestamps = false;

    // protected $table = 'tasks';

    public function complete()
    {
        return $this->completed = true;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
}
