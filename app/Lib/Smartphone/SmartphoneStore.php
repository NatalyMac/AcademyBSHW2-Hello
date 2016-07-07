<?php

namespace App\Lib\Smartphone;


interface SmartphoneStore 
{
    public function getFirst();
    public function getLast();
    public function getAll();
}