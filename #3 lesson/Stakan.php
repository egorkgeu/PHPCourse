<?php

Class Stakan {
    //  Это до PHP 8
    //    public int $volume_stakan = 0;
    //    public int $volume = 0;
    //    function __construct($volume_stakan, $volume)
    //    {
    //        $this->volume_stakan = $volume_stakan;
    //        $this->volume = $volume;
    //    }

    // Это после PHP 8
    public function __construct(
        public int $volume_stakan,
        public int $water_count = 0,
        public bool $check_count = false
    ){}

//      Так делать не стоит
//    public function change($water_count)
//    {
//        if($water_count <= $this->volume_stakan){
//            $this->water_count += $water_count;
//        } else {
//            return 'Количество воды не может превышать объем стакана';
//        }
//
//        if($water_count <= $this->volume_stakan){
//            $this->water_count += $water_count;
//        } else if ($water_count <= $this->volume_stakan) {
//            return 'Количество воды не превышает объем стакана';
//        } else {
//            return 'Количество воды равно объему стакана';
//        }
//    }
    public function change($water_count){
        $this->check();
        if($this->check_count){
            $this->water_count+=$water_count;
        }
    }

    public function check(){
        if ($this->water_count >= $this->volume_stakan){
            $this->check_count = true;
        }
    }

}