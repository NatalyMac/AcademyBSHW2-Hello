<?php

namespace App\Lib\Smartphone;


class Battery
{
    protected $capacity;

    public function __construct(int $capacity = 0)
    {
        $this->capacity  = $capacity;
    }

    public function get()
    {   
    	$battery = ' battery capacity '. $this->capacity . ' mAh';
        return $battery;
    }
    
}