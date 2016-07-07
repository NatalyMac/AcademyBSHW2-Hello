<?php

namespace App\Lib\Repositories;

use App\Lib\Smartphone\SmartphoneStore;

class ArraySmartphoneStore implements SmartphoneStore 
{
    
    protected $data = [
        'Apple iPhone'=> [
        'cpu' => ['vendor'=> 'Qualcomm 5555', 'cores'=> 4],
        'display'=> ['resolution' => '480x320'],
        'camera' => ['mpixels'=> 8],
        'battery' => ['capacity' => 1234]
        ],
        
        'SonyXperia'=> [
        'cpu' => ['vendor'=> 'Qualcomm 5555', 'cores'=> 4],
        'display'=> ['resolution' => '480x320'],
        'camera' => ['mpixels'=> 8],
        'battery' => ['capacity' => 1234]
        ],


    ];
    public function getFirst()
    {
        return reset($this->data);
    }
    public function getLast()
    {
        return end($this->data);
    }
    public function getAll()
    {
        return $this->data;
    }
}