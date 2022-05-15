<?php

require('SourceWater.php');

class WaterRepository
{
    public function __construct(
        private SourceWater $sourse
    ){}

    public function take($count){
        return $this->sourse->give($count);
    }
}