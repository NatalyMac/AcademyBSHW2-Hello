<?php

namespace App\Lib\Smartphone;


class Smartphone 
{    
    protected $name;
    protected $cpu;
    protected $display;
    protected $camera;
    protected $battery;
    
    public function __construct(string $name, CPU $cpu, Display $display, Camera $camera, Battery $battery)
    {
        $this->name  = $name;
        $this->cpu = $cpu;
        $this->display = $display;
        $this->camera = $camera;
        $this->battery = $battery;
    }


    public function get()
    {
        //$_this = new self;
        //return $_this->name;
        $smartphone = $this->name . ', ' . $this->cpu->get() . $this->display->get() . $this->camera->get() . $this->battery->get();
        return $smartphone;
    }
}