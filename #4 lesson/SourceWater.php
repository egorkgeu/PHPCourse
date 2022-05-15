<?php

class SourceWater
{
    public function __construct(
        private int $count
    ){}

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    public function give($count){
        if ($this->count >= $count){
            $this->count-=$count;

            return $count;
        }
        return $this->count;
    }
}