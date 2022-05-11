<?php

//Увеличить значение характеристики(действие)
//Функция - это действие
function change ($volume, $value){
    $volume+=$value;
    return $volume;
}

//Данная функция сообщает о изменении объема
function logChange($value)
{
    print_r("Объем увеличился на " . $value . "\r\n");
}