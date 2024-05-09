<?php

class Task
{
    // Constructor Property Promotion
    public function __construct(
        public $title, 
        public $completed = false
    ) {}

    public function complete()
    {
        return $this->completed = true;
    }
}
