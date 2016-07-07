<?php

namespace App\Lib\Smartphone;


class Display
{
    protected $resolution;

    
    public function __construct(string $resolution = '')
    {
        $this->resolution  = $resolution;
    }

    public function get()
    {
    	$display = $this->resolution . ' display, ';
        return $display;
    }
    
}