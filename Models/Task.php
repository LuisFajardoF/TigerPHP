<?php

require 'Model.php';

class Task extends Model
{
    public $id;
    public $title;
    public $color = 'black';
    public $completed = false;

    public function complete()
    {
        return $this->completed = true;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
}
