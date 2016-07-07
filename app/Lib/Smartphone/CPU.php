<?php

namespace App\Lib\Smartphone;


class CPU 
{
    protected $vendor;
    protected $cores;

    public function __construct(string $vendor = '', int $cores = 0)
    {
        $this->vendor  = $vendor;
        $this->cores = $cores;
     
    }

    public function get()
    {   
    	$cpu = $this->vendor.' '. $this->cores . ' cores, ';
        return $cpu;
    }
    
}
    