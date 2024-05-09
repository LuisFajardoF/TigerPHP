<?php

class Task
{
    public $color = 'black';

    // Constructor Property Promotion
    public function __construct(
        public $title, 
        public $completed = false
    ) {}

    public function complete()
    {
        return $this->completed = true;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
}
