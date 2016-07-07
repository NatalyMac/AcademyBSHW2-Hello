<?php

namespace App\Lib\Smartphone;


class Camera
{
    protected $mpixels;

    public function __construct(int $mpixels = 0)
    {
        $this->mpixels  = $mpixels;
    }
   
    public function get()
    {   
    	$camera = $this->mpixels . ' megapixels camera, ';
        return $camera;
    }

}