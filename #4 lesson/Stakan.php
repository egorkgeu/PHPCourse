<?php

Class Stakan {

    public function __construct(
        private int $volume_stakan,
        private int $water_count = 0,
        private bool $check_count = false
    ){}

    public function change($water_count){
        if ($this->check_count){
            return;
        }

        $this->water_count+=$water_count;
        $this->setCheckCount();
    }

    /**
     * @return bool
     */
    public function getCheckCount()
    {
        return $this->check_count;
    }

    /**
     * @return void
     */
    public function setCheckCount(){
        if ($this->water_count >= $this->volume_stakan){
            $this->check_count = true;
        }
    }

    /**
     * @return int
     */
    public function getVolume(): int
    {
        return $this->water_count;
    }

    /**
     * @return int
     */
    public function getWaterCount(): int
    {
        return $this->water_count;
    }

}